<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//后台轮播图管理
class SliderController extends Controller
{
    //
    public  function  index(Request $request)
    {
        //获取数据总数
        $tot=\DB::table('slider')->count();
        $data=\DB::table('slider')->paginate(10);

        //加载页面
        return view("admin.sys.Slider.index")->with('tot',$tot)->with('data',$data);
    }
    //新建处理方法
    public function store(Request $request)
    {
        $arr=$request->except('_token');


        // 表单验证的规则

        $rules=[
            'title' => 'required',
            'href' => 'required',
            'orders'=>'required',
            'img'=>'required',
        ];

        // 表单验证的提示信息

        $message=[
            "title.required"=>"请输入标题",
            "href.required"=>"请输入友情链接",
            "orders.required"=>"请输入排序",
            "img.required"=>"请选择图片",
        ];

        // 使用laravel的表单验证
        $validator = \Validator::make($arr,$rules,$message);

        // 开始验证

        if ($validator->passes()) {

            // 插入数据库

            if (\DB::table("slider")->insert($arr)) {
                return redirect('/admin/sys/slider');
            }else{
                return back();
            }
        }else{
            // 返回错误信息
            return back()->withInput()->withErrors($validator);
        }
    }

    public function destroy($id){

        // 删除数据

        if (\DB::table("slider")->delete($id)) {
            return 1;
        }else{
            return 0;
        }
    }

}
