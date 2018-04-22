<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
//用户模型
class user extends Model
{
    //根据用户编号获取用户详细信息
    public static  function GetUserInfoByUserid($uid)
    {
        $data=\DB::table("user")->select("userinfo.*")
            ->join("userinfo","userinfo.uid","=","user.id")
            ->where("user.id",$uid)->get();
        return $data;
    }
}
