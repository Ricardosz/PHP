<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


//用户访问权限管理
class PremissionController extends Controller
{
    //权限管理首页
    public function index()
    {
        $data = \DB::table('access')->paginate(10);

        return view('admin.Permissions.index')->with("data", $data);
    }

    //删除用户访问权限
    public function destroy($id)
    {
        // 删除数据
        if (\DB::table("access")->delete($id)) {
            return 1;
        } else {
            return 0;
        }
    }

    //修改用户访问权限状态
    public function ajaxStatus(Request $request)
    {
        // 剔除数据
        $arr = $request->except('_token');
        if (\DB::update("update access set status= $arr[status] where id=$arr[id]")) {
            # code...
            return 1;
        } else {
            return 0;
        }
    }

    //添加用户访问权限
    public function store(Request $request)
    {

        // 直接把字符串数组化
        parse_str($_POST['str'], $arr);
        $rules = [
            'name' => 'required|unique:access',
            'display_name' => 'required|unique:access',
        ];
        // 表单验证的提示信息
        $message = [
            "name.required" => "请输入权限名称",
            "name.unique" => "权限名称已存在",
            "display_name.required" => "请输入显示名称",
            "display_name.unique" => "权限名称已存在",
        ];
        $validator = \Validator::make($arr, $rules, $message);
        if ($validator->passes()) {
            if (\DB::table('access')->insert([
                'name' => $arr['name'],
                'status' => $arr['status'],
                'display_name' => $arr['display_name'],
                'updated_time' => date('Y-m-d H:i:s', time()),
                'created_time' => date('Y-m-d H:i:s', time()),
            ])) {
                return 1;
            } else {
                return 0;
            }
        } else {
            // 具体查看laravel的核心类
            return $validator->getMessageBag()->getMessages();
        }
    }

    //修改用户访问权限信息
    public function update(Request $request)
    {
        parse_str($_POST['str'], $arr);
        if (\DB::update("update access set status= $arr[status] ,name='$arr[name]',display_name=$arr[display_name] where id=$arr[id]")) {
            return 1;
        } else {
            return 0;
        }
    }

    //修改用户访问权限
    public function edit($id)
    {
        // 查询数据库
        $data = \DB::table("access")->find($id);
        // 分配数据
        return view('admin.Permissions.edit')->with("data", $data);
    }

}
