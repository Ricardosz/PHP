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
        $code=\App\Http\Service\Com\YzmService::CreateYzm();
        //生成验证码
        $code->make();
    }

    //登陆操作
    public  function check(Request $request)
    {
        //重构后
    /*     $status=1;
        $result=\App\Http\Service\Com\LoginService::Login($request,$status);
        if ($result==1)
        {
            return redirect('admin');
        }
        else{
            return back()->with($result);
        }
    */
        //获取数据
       $name=$request->input('name');
        $pass=$request->input('pass');
        $uccode=$request->input('code');
        //验证验证码
        $code=\App\Http\Service\Com\YzmService::CreateYzm();
        //获取session
        $oldcode=$code->get();
        //检测验证码
        if (strtoupper($uccode)==$oldcode)
        {
            //验证密码
            $data=\DB::table('user')->where([['name','=',$name],['status','=',0]])->first();
            if ($data){
                if ($pass==\Crypt::decrypt($data->pass))
                {
                    //声明数组
                    $arr=[];
                    $arr['updated_time']=date('Y-m-d H:i:s', time());
                    $arr['count']=++$data->count;
                    //更新登录信息
                    \DB::table('user')->where('id',$data->id)->update($arr);
                    //存session
                    session(['AdminUserInfo.name'=>$data->name]);
                    session(['AdminUserInfo.id'=>$data->id]);
                    //跳转到首页
                    return redirect('admin');
                }else
                    {
                        return back()->with("error","密码错误");
                    }
            }
            else{
                return back()->with("error","用户名不存在");
            }

        }else{
            return back()->with("error",'验证码错误');
        }

    }

    //注销
    public function  logout(Request $request)
    {
        //清空session
        $request->session()->flush();
        //退出后重定向到后台登录页
        return  redirect('admin/login');
    }

}
