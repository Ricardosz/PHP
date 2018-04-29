<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//登陆控制器
class LoginController extends Controller
{
    //登陆首页
    public function index()
    {
        //获取上一个页面
        session(['prevPage' => $_SERVER['HTTP_REFERER']]);
        return view('home.login');
    }

    //登陆操作
    public function check(Request $request)
    {

        //获取数据
        $email = $request->input('email');
        $pass = $request->input('pass');
        $uccode = $request->input('Code');
        //验证验证码
        $code=\App\Http\Service\Com\YzmService::CreateYzm();
        //获取session
        $oldcode = $code->get();
        $data = \DB::table('user')->where('email', $email)->first();
        //验证验证码
        if (strtoupper($uccode) == $oldcode)
        {
            if ($data)
            {
                if ($pass == \Crypt::decrypt($data->pass)) {
                    session(['UserInfo.email' => $data->email]);
                    session(['UserInfo.name' => $data->name]);
                    session(['UserInfo.id' => $data->id]);
                    return redirect(session('prevPage'));
                } else {
                    return back();
                }
            } else {
                return back();
            }
        } else {
            return back()->with("error", '验证码错误');
        }
    }

    //注销
    public function logout(Request $request)
    {
        //清空session
        $request->session()->flush();

        //退出后重定向到后台登录页
        return redirect('/');
    }

    //找回密码
    public function findPwd()
    {
        if ($_POST) {
            //接受数据
            $Email = $_POST['email'];
            //获取数据
            $data = \DB::table('user')->where('email', $Email)->first();
            $news="找回密码";
            if ($data) {
                \App\Http\Service\Com\EmailService::SendEmail($data->id, $data->token, $Email,$news);
                $arr = explode("@", $Email);
                $href = "mail." . $arr[1];
                return view('Email.findPwdInfo')->with("href", $href);
            } else {
                return back();
            }
        } else {
            return view('home.findPwd');
        }

    }

    //修改密码
    public function savePwd($id, $token)
    {
        if ($_POST) {
        if ($_POST['pass']==$_POST['repass']){
            if (strlen($_POST['pass'])>=6&&strlen($_POST['pass'])<=12){
                $data=array();
                $data['token']=str_random(50);
                $data['pass']=\Crypt::encrypt($_POST['pass']);
                if (\DB::table('user')->where('id',$id)->update($data))
                {
                    return redirect('/login');
                }
                else
                    {
                        return back();
                    }

            }
            else{
                return back();
            }
        }
        else
            {
             return back();
            }
        }
        else
            {
            return view('Email.savePwd');
        }
    }

}
