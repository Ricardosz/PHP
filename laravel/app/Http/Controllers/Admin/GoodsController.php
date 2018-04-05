<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //商品首页
    public  function  index()
    {
        //读取数据库
        $data=\DB::table("goods")->orderby('id','desc')->paginate(10);
        //处理商品多图
        foreach ($data as $key=>$value)
        {
           $value->tupian=\DB::table("goodsimg")->where("gid",$value->id)->get();
        }
        //加载页面
        return view('admin.goods.index')->with("data",$data);
    }

    //商品添加页面
    public function  create()
    {
        //查找所有商品分类
       $data=\DB::select("select types.*,concat(path,id) p from types order by p");

       //数据处理
        foreach ($data as $key=>$value)
        {
          $arr=explode(',',$value->path);
          $size=count($arr);
          $value->size=$size-2;
          $value->html=str_repeat('|-----',$size-2).$value->name;
        }


       return view('admin.goods.add')->with("data",$data);
    }

    //处理商品的插入操作
    public function store(Request $request)
    {
        //获取数据
        $imgs=$request->input("imgs");
        $data=$request->except('_token','imgs');

        //插入数据库
     if($id=\DB::table("goods")->insertGetId($data))
      {
          //数据商品多图片
          $arr=explode(',',$imgs);
          foreach ($arr as $key=>$value)
          {
              $brr=array();
              $brr['gid']=$id;
              $brr['img']=$value;
              \DB::table("goodsimg")->insert($brr);
          }
            return redirect('admin/goods');
       }
      else
          {
               return back();
          }
    }

    //删除商品
    public  function destroy()
    {

    }

}
