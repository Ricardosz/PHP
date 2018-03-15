<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//后台登陆控制器
class LoginController extends Controller
{
    //登陆首页
    public function index()
    {
        return view("admin.Login");
    }

    //验证码
    public function yzm()
    {
        require_once("../resources/code/Code.class.php");
        //实例化
        $code=new \Code();
        //生成验证码
        $code->make();
    }
}
