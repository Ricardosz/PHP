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

        foreach ($data as $key => $value) {
            if ($value->pid == $pid) {
                $newArr[$value->id] = $value;
                $newArr[$value->id]->zi=$this->data($data,$value->id);
            }
        }
            return $newArr;
        }
        //第三种方式

        /*第二种方式
         //数据库查询
        $data=\DB::table("types")->where("pid",$pid)->get();
        //查询下一级分类
         foreach ($data as $key=>$value)
         {
          $value->zi=$this->data($value->id);
         }
         return $data;

    }*/


    //分类管理首页
    public function index()
    {
        //一、使用面向过程的方式
//         //遍历出所以顶级分类
//        $one=\DB::table("types")->where("pid",0)->get();
//        //遍历出one的孩子
//        foreach ($one as $value)
//        {
//            $value->zi=\DB::table("types")->where("pid",$value->id)->get();
//        }
//        //遍历三级分类
//        foreach ($one as $value)
//        {
//            foreach ($value->zi as $v)
//            {
//                $v->zi=\DB::table("types")->where("pid",$value->id)->get();
//            }
//        }


        //二、使用递归实现数据格式化
//        $arr=$this->data();
//        echo "<pre></pre>";
//        print_r($arr);
//         exit;

        //三、使用递归实现数据格式化
        $data = \DB::table("types")->get();
        $arr = $this->data($data,$pid=0);
        //四、实现树形结构
        $data=\DB::select("select types.*,concat(path,id) p from types order by p");


        //查询数据
        //$data = \DB::table('types')->orderby("sort", 'desc')->get();
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
        if (\DB::delete("delete from types where id=$id or path like '%,$id,%'")) {
            return 1;
        } else {
            return 0;
        }

    }
}
