<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class GoodsController extends Controller
{
    //商品首页
    public function index()
    {
        //读取数据库
        $data = \DB::table("goods")
            ->select("goods.id", "goods.img", "goods.name AS gname", "types.name AS cname")
            ->join("types", "types.id", "=", "goods.cid")
            ->orderby('goods.id', 'desc')->paginate(5);
        foreach ($data as $key => $value) {
            $value->num = \DB::table("sku")->where("sku.gid", $value->id)->sum('sku.num');
        }
        $data->tot = \DB::table("goods")->count();

        $data->type_name = \DB::select("select types.*,concat(path,id) p from types order by p");
        foreach ($data->type_name as $key => $value) {
            $arr = explode(',', $value->path);
            $size = count($arr);
            $value->size = $size - 2;
            $value->html = str_repeat('|-----', $size - 2) . $value->name;
        }
        //加载页面
        return view('admin.goods.index')->with("data", $data);

    }


    //处理商品的插入操作
    public function store(Request $request)
    {
        parse_str($_POST['str'], $arr);
        //插入数据库
        if (\DB::table("goods")->insert($arr)) {
            return 1;
        } else {
            return 0;
        }
    }

    //删除商品
    public function destroy($id)
    {
        $result = $this->DelGoods($id);
        return $result;
    }

    //编辑商品详情
    public function edit($id)
    {

        $data = \DB::table("goods")
            ->select("goods.id as gid", "goods.img", "goods.name AS gname", "types.name AS cname", "types.id as cid")
            ->join("types", "types.id", "=", "goods.cid")
            ->where('goods.id', $id)->first();
        $data->num = \DB::table("sku")->where("sku.gid", $id)->sum('sku.num');
        $data->type_name = \DB::select("select types.*,concat(path,id) p from types order by p");
        foreach ($data->type_name as $key => $value) {
            $arr = explode(',', $value->path);
            $size = count($arr);
            $value->size = $size - 2;
            $value->html = str_repeat('|-----', $size - 2) . $value->name;
        }

        return view('admin.goods.edit')->with("data", $data);
    }





    //更新
    public function update(Request $request)
    {
        // 直接把字符串数组化
        parse_str($_POST['str'], $arr);
        if (!empty($arr['cid'])) {
            $sql = "update goods set name='$arr[gname]',cid=$arr[cid] where id=$arr[gid]";

        } else {
            $sql = "update goods set name='$arr[gname]' where id=$arr[gid]";
        }
        $result = $this->UpdateGoods($sql);
        return $result;
    }

    public static function UpdateGoods($sql)
    {
        $result = (\DB::transaction(function () use ($sql) {
            \DB::update($sql);
            return 1;
        }));
        return $result;
    }


    public static function DelGoods($id)
    {
        $result = (\DB::transaction(function () use ($id) {
            \DB::table("goods")->delete($id);
            \DB::table('goods_attribute')->where('gid', '=', $id)->delete();
            \DB::table('goods_serach')->where('gid', '=', $id)->delete();
            return 1;
        }));
        return $result;
    }
}
