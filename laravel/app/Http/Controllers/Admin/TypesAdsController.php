<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//后台分类广告管理
class TypesAdsController extends Controller
{
    public  function  index(Request $request)
    {   //多表查询
        $data=\DB::table("typesads")->select("typesads.*","types.name")->join("types","types.id","=","typesads.cid")->paginate(10);
        //加载页面
        return view("admin.sys.TypesAds.index")->with("data",$data);
    }

    //新增分类广告
    public  function  create()
    {

        $data=\DB::table("types")->where("pid",0)->get();
        return view("admin.sys.TypesAds.add")->with('data',$data);
    }

    //分类广告处理
    public function  store(Request $request)
    {
        //数据处理
        $data=$request->except("_token");
        if (\DB::table("typesads")->insert($data))
        {
            return redirect("admin/sys/types");
        }
        else
            {
                return back();
            }
    }
}
