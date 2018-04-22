<?php

namespace App\Http\Controllers\Home;

use App\model\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//用户控制器
class UserController extends Controller
{
    //
    public function index()
    {
         $uid=session("AdminUserInfo.id");
         $data=user::GetUserInfoByUserid($uid);
         return view('home.user.user');
    }
}
