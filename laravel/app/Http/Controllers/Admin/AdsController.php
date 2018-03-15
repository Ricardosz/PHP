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
        //加载页面
        return view("admin.sys.ads.index");
    }


}
