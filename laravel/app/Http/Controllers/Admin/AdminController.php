<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

// 使用类

use App\Http\Controllers\Controller;

// 后台管理员控制器
class AdminController extends Controller
{
    // 管理员首页

    public function index()
    {
        // 总数据
        $tot = \DB::table('user')->where('is_admin',1)->count();
        // 加载页面
        $data = \DB::table('user')
            ->select("user.*","role.name AS rname","rid","role.display_name")
            ->where('is_admin',1)
            ->join("user_role","user_role.uid","=","user.id")
            ->join("role","role.id","=","user_role.rid")
            ->paginate(10);
        $role=\DB::table('role')->get();
        return view("admin.admin.index")->with('data', $data)->with('tot', $tot)->with("role",$role);

    }


    // 添加操作  admin/admin  post

    public function store(Request $request)
    {

        // 直接把字符串数组化
        parse_str($_POST['str'], $arr);
        // 表单验证的规则
        $rules = [
            'name' => 'required|unique:user|between:6,12',
            'pass' => 'required|same:repass|between:6,12',
        ];
        // 表单验证的提示信息
        $message = [
        "name.required" => "请输入用户名",
        "pass.required" => "请输入密码",
        "name.unique" => "用户名已存在",
        "pass.same" => "两次密码不一致",
        "pass.between" => "密码长度不在6-12位之间",
        "name.between" => "用户名长度不在6-12位之间",
    ];
        // 使用laravel的表单验证
        $validator = \Validator::make($arr, $rules, $message);
        // 开始验证
        if ($validator->passes()) {
            // 验证通过添加数据库
            unset($arr['repass']);
            $arr['pass'] = \Crypt::encrypt($arr['pass']);
         /*

            // 插入数据库
                      if (\DB::table('user')->insert([
                'name'=>$arr['name'],
                'pass'=>$arr['pass'],
                'updated_time'=>time(),
                'status'=>$arr['status'],
                'token'=>$request['_token'],
                'is_admin'=>1,

            ])) {
                return 1;
            } else {
                return 0;
            }
         */
         $result=$this->AddUser_role($arr,$request);
         return $result;

        }
        else {
            // 具体查看laravel的核心类
            return $validator->getMessageBag()->getMessages();
        }
    }

    // 修改页面 admin/admin/{admin}/edit get

    public function edit($id)
    {
        // 查询数据库
        $data = \DB::table("user")->find($id);
        $data->pass = \Crypt::decrypt($data->pass);
        $role=\DB::table("role")->get();
        // 分配数据
        return view('admin.admin.edit')->with("data", $data)->with("role",$role);
    }


    // 更新操作 admin/admin/{admin}  put

    public function update(Request $request)
    {

        // 直接把字符串数组化
        parse_str($_POST['str'], $arr);

        // 表单验证的规则

        $rules = [
            'pass' => 'required|same:repass|between:6,12',
        ];


        // 表单验证的提示信息

        $message = [

            "pass.required" => "请输入密码",
            "pass.same" => "两次密码不一致",
            "pass.between" => "密码长度不在6-12位之间",

        ];

        // 使用laravel的表单验证
        $validator = \Validator::make($arr, $rules, $message);

        // 开始验证

        if ($validator->passes()) {

            // 验证通过添加数据库

            unset($arr['repass']);

            $arr['pass'] = \Crypt::encrypt($arr['pass']);


            // 插入数据库
            $result=$this->UpdateUser_role($arr);
          /*  if (\DB::update("update user set status= $arr[status] ,pass='$arr[pass]' where id=$arr[id]")) {
                return 1;
            } else {
                return 0;
            }
          */
          return $result;

        } else {
            // 具体查看laravel的核心类
            return $validator->getMessageBag()->getMessages();
        }
    }

    // 删除操作 admin/admin/{admin}   delete

    public function destroy($id)
    {
        // 删除数据
        $result=$this->DelUser_role($id);
        return $result;
    }

    // 修改状态的方法

    public function ajaxStatus(Request $request)
    {
        // 剔除数据
        $arr = $request->except('_token');
        if (\DB::update("update user set status= $arr[status] where id=$arr[id]")) {
            # code...
            return 1;
        } else {
            return 0;
        }
    }

    //插入角色表
    public  function AddUser_role($arr,$request)
    {
        $result=(\DB::transaction(function ()use($arr,$request) {
            $uid= \DB::table('user')->insertGetId([
                'name'=>$arr['name'],
                'pass'=>$arr['pass'],
                'updated_time'=>date('Y-m-d H:i:s', time()),
                'status'=>$arr['status'],
                'token'=>$request['_token'],
                'is_admin'=>1,
            ]);
            \DB::table('user_role')->insert([
                'uid'=>$uid,
                'rid'=>$arr['rid'],
                'created_time'=>date('Y-m-d H:i:s',time()),
            ]);
            return 1;
        }));
        return $result;
    }

    //同步更新用户角色表
    public function UpdateUser_role($arr)
    {
        $result=(\DB::transaction(function ()use($arr) {
            \DB::update("update user set status= $arr[status] ,pass='$arr[pass]' where id=$arr[id]");
            \DB::update("update user_role set rid= $arr[rid] where uid=$arr[id]");
            return 1;
        }));
        return $result;
    }

    //同步删除关联表
    public function DelUser_role($id)
    {
        $result=(\DB::transaction(function ()use($id) {
            \DB::table("user")->delete($id);
            \DB::table('user_role')->where('uid', '=', $id)->delete();
            return 1;
        }));
        return $result;

    }



}
