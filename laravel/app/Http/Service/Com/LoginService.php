<?php
/**
 * Created by PhpStorm.
 * User: a8818
 * Date: 2018/4/9
 * Time: 15:12
 */
namespace App\Http\Service\Com;

Class LoginService
{
    public static function Login($request,$status,$email=" ")
    {
        $name=$request->input('name');
        $pass=$request->input('pass');
        $uccode=$request->input('code');
        //验证验证码
        $code=\App\Http\Service\Com\YzmService::CreateYzm();
        //获取session
        $oldcode=$code->get();
        //
        if (!empty($email)){
            $data = \DB::table('user')->where('email', $email)->first();
        }
        else{
            $data=\DB::table('user')->where(['name','=',$name])->first();
        }

        //检测验证码
        if (strtoupper($uccode)==$oldcode)
        {
            $result=AdminLogin();
            return $result;
        }
        else
            {
                $result="验证码错误";
                return $result;
            }
    }

    private static function  AdminLogin($pass,$data)
    {
        return 1;
    }

    private function UserLogin($pass,$data)
    {

    }

    private function SysLogin($pass,$data)
    {

    }


    public static function  CheckUserRole($uid)
    {
        //查询该用户下的访问权限
        $role=\DB::table("user")
            ->select("access.name")
            ->where("user.id",$uid)
            ->join("user_role","user_role.uid","=","user.id")
            ->join("role","role.id","=","user_role.rid")
            ->join("role_access","role_access.rid","=","role.id")
            ->join("access","access.id","=","role_access.aid")
            ->first();
        return $role;
    }
}

