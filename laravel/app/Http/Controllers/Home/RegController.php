<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


//注册控制器
class RegController extends Controller
{
    //注册页面
    public function index()
    {
        return view('home.reg');
    }

    //验证码
    public function yzm()
    {
        $code=\App\Http\Service\Com\YzmService::CreateYzm();
        $code->make();
    }

    //处理操作
    public function check(Request $request)
    {

        $arr = $request->except("_token");
        $code= \App\Http\Service\Com\YzmService::CreateYzm();
        $oldcode = $code->get();
        //验证验证码
        if (strtoupper($arr['Code']) == $oldcode) {
            //验证密码位数
            if (strlen($arr['pass']) >= 6 && strlen($arr['pass']) <= 12) {
                //判断是否邮箱
                if (preg_match('/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/', $arr['email'])) {
                    //验证邮箱是否注册
                    if (\DB::table("user")->where('email', $arr['email'])->first()) {
                        return back()->with("error", '邮箱已注册');
                    } else {
                        //判断密码是否相等
                        if ($arr['pass'] == $arr['repass']) {
                            //注册
                            $data = array();
                            $data['email'] = $arr['email'];
                            $data['created_time'] =date('Y-m-d H:i:s', time());
                            $data['status'] = 0;
                            $data['token'] = str_random(50);
                            $data['pass'] = \Crypt::encrypt($arr['pass']);
                            $Email = $arr['email'];
                            $arr = explode("@", $Email);
                            $href = "mail" . $arr[1];
                            $news="恭喜您注册成功，请立即激活账号";
                            if ($id = \DB::table("user")->insertGetID($data)) {
                                \App\Http\Service\Com\EmailService::SendEmail($id, $data['token'], $Email,$news);
                                $arr = explode("@", $Email);
                                $href = "mail." . $arr[1];
                                return view('home.activate')->with("href", $href);
                            } else {
                                return back()->with("error", '注册失败');
                            }
                        } else {
                            return back()->with("error", '两次密码不一致');
                        }
                    }
                } else {
                    return back()->with("error", '邮箱格式错误');
                }

            } else {
                return back()->with("error", '密码长度不满足');
            }
        } else {
            return back()->with("error", '验证码错误');
        }
    }



    //激活账户
    public function activate($id, $token)
    {
        //查询用户是否存在
        $data = \DB::table('user')->where("id", $id)->first();
        //判断token
        if ($token == $data->token) {
            $arr = array();
            $arr['status'] = 1;
            $arr['token'] = str_random(50);
            //数据库状态修改，跳转到登陆页面
            if (\DB::table('user')->where("id", $id)->update($arr)) {
                return redirect('/login');
            } else {
                return back();
            }

        } else {
            echo "您的认证已过期";
        }
    }

}
