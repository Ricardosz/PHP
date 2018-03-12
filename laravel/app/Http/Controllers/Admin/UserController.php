<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

//后台用户管理控制器
class UserController extends Controller
{
    //用户管理首页
    public function index()
    {
      return view("admin.user.index");
    }

    //添加页面 get
    public function  create()
    {
        return view("admin.user.add");
    }

    //插入操作 post admin/user
    public function  store()
    {

    }

    //修改页面 admin/user/{admin}/edit get
    public function  edit()
    {
        return view("admin.user.edit");
    }

    //更新 admin/user/{admin}    put
    public function update()
    {

    }
    //删除 admin/user/{admin}
    public function  destroy()
    {

    }
}
