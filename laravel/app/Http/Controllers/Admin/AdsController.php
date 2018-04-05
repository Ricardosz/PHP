<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//后台广告管理
class AdsController extends Controller
{
    public  function  index()
    {
        $data=\DB::table("ads")->orderby("sort","desc")->paginate(10);
        //加载页面
        return view("admin.sys.ads.index")->with("data",$data);
    }

    //广告添加
    public function  create()
    {
        return view("admin.sys.ads.add");
    }

    //广告的处理
    public  function  store(Request $request)
    {
        //数据处理
        $arr=$request->except("_token");
        //插入数据库
        if(\DB::table('ads')->insert($arr))
        {
            return redirect("admin/sys/ads");
        }else
            {
                return back();
            }
    }




}
