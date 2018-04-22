<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    //

    public function  index()
    {
        $data=\DB::table("attribute")
            ->select("attribute.*","types.name AS tname","types.id AS tid")
            ->join("types","types.id","=","goods_cid")
            ->paginate(10);
        $data->type_name = \DB::select("select types.*,concat(path,id) p from types order by p");
        foreach ($data->type_name as $key => $value) {
            $arr = explode(',', $value->path);
            $size = count($arr);
            $value->size = $size - 2;
            $value->html = str_repeat('|-----', $size - 2) . $value->name;
        }
        return view('admin.attribute.index')->with("data",$data);
    }

    //处理商品属性名的插入操作
    public function store(Request $request)
    {
        parse_str($_POST['str'], $arr);

        //插入数据库
        if (\DB::table("attribute")->insert(
            [
                'name'=>$arr['name'],
                'goods_cid'=>$arr['goods_cid'],
            ]
        )) {
            return 1;
        } else {
            return 0;
        }
    }


    public function edit($id)
    {
        $data=\DB::table("attribute")->where("attribute.id","$id")->first();
        $data->type_name = \DB::select("select types.*,concat(path,id) p from types order by p");
        foreach ($data->type_name as $key => $value) {
            $arr = explode(',', $value->path);
            $size = count($arr);
            $value->size = $size - 2;
            $value->html = str_repeat('|-----', $size - 2) . $value->name;
        }
        return view('admin.attribute.edit')->with("data",$data);

    }

    public function update(Request $request)
    {
        // 直接把字符串数组化

        parse_str($_POST['str'], $arr);
        if (!empty($arr['goods_cid'])) {
            $sql = "update attribute set name='$arr[name]',goods_cid=$arr[goods_cid] where id=$arr[id]";
        } else {
            $sql = "update attribute set name='$arr[name]' where id=$arr[id]";
        }
        $result = $this->UpdateAttribute($sql);
        return $result;

    }

    public static function UpdateAttribute($sql)
    {
        $result = (\DB::transaction(function () use ($sql) {
            \DB::update($sql);
            return 1;
        }));
        return $result;
    }



}
