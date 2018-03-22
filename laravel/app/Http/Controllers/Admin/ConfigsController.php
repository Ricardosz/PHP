<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//后台配置管理
class ConfigsController extends Controller
{
    public  function  index()
    {
        //加载页面
        return view("admin.sys.configs.index");
    }

    //更新系统配置
    public function store(Request $request)
    {
        //接收原图
        $oldLogo=$request->input('oldLogo');
        $logo=$request->input("logo");
        //获取数据
        $arr=$request->except("_token",'oldLogo');
        //写入配置文件中

        $str=var_export($arr,true);
        $str1="<?php return ".$str."?>";
        //写入到指定位置
        file_put_contents('../config/web.php',$str1);

        if ($oldLogo!=$logo)
        {
        unlink("./Uploads/Sys/".$oldLogo);
        }
        return back();
    }
}
