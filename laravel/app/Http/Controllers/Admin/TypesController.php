<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//分类管理控制器
class TypesController extends Controller
{


    //二、数据格式化处理方法
    public function data($data,$pid = 0)
    {
        $newArr = array();
        //获取顶级分类
        foreach ($data as $key => $value)
        {
            if ($value->pid == $pid) {
                $newArr[$value->id] = $value;
                $newArr[$value->id]->zi=$this->data($data,$value->id);
            }
        }
        return $newArr;
    }

    //分类管理首页
    public function index()
    {
        //三、使用递归实现数据格式化
        $data=\DB::select("select types.*,concat(path,id) p from types order by p");
        $arr = $this->data($data,$pid=0);

        //加载数据到页面上
        return view("admin.types.index")->with("data", $data);
    }

    //添加页面 get
    public function create()
    {
        return view("admin.types.add");
    }

    //插入操作 post admin/types
    public function store(Request $request)
    {
        //处理数据
        $data = $request->except("_token");
        //插入数据
        if (\DB::table('types')->insert($data)) {
            //插入成功 跳转回展示页面
            return redirect('admin/types');
        } else {
            //添加失败 返回上一页面
            return back();
        }
    }

    //修改页面 admin/user/{admin}/edit get
    public function edit()
    {
        return view("admin.types.edit");
    }

    //更新 admin/user/{admin}    put
    public function update()
    {

    }

    //删除 admin/user/{admin}
    public function destroy($id)
    {
       $result=$this->DelTypes($id);
       return $result;
    }

    //删除分类时把改分类下的商品信息全部删除
    public static function DelTypes($id)
    {
        $result = (\DB::transaction(function () use ($id) {
            \DB::delete("delete from types where id=$id or path like '%,$id,%'");
            \DB::table('goods')->where("goods.cid", '=', $id)->delete();
            return 1;
        }));
        return $result;
    }
}
