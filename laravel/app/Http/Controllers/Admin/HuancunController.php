<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//缓存控制器
class HuancunController extends Controller
{
    public function  index(Request $request)
    {
        //$data=\DB::table("user")->get();
        //写入缓存
        //\Cache::put("data",$data,1);
        //读取缓存
        //$data=\Cache::get('data');
        //删除缓存
        //\Cache::forget('data');
        //删除所以缓存
        \Cache::flush();
        //dd($data);
    }
}
