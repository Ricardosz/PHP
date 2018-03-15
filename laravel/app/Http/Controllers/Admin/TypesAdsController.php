<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//后台分类广告管理
class TypesAdsController extends Controller
{
    public  function  index()
    {
        //加载页面
        return view("admin.sys.TypesAds.index");
    }
}
