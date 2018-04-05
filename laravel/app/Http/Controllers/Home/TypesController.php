<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//分类控制器
class TypesController extends Controller
{
    //分类首页
    public function index($id)
    {
        //查询所有顶级分类
        $types=\DB::table('types')->where("pid",0)->get();
        //查询当前分类
        $type=\DB::table("types")->where("id",$id)->first();
        //将path路径处理成数组
        $arr=explode(',',$type->path);
        //顶级分类
        $top=$arr[1]?$arr[1]:$id;
        $size=count($arr)-1;
        switch ($size)
        {
            case '1':
                $erClass=\DB::table("types")->where([["path","like","%,$id,%"],['pid','!=',$id]])->get();
                $newarr=array();
                foreach ($erClass as $key=>$value)
                {
                    $newarr[]=$value->id;
                }
                $goods=\DB::table('goods')->whereIn("cid",$newarr)->get();
                break;
            case '2':
                $goodClass=\DB::table("types")->where("pid",$id)->get();
                $newarr=array();
                foreach ($goodClass as $key=>$value)
                {
                    $newarr[]=$value->id;
                }
                $goods=\DB::table('goods')->whereIn("cid",$newarr)->get();
                break;
            case '3':
                $goods=\DB::table('goods')->where("cid",$id)->get();
                break;
        }
        //格式化数据
        $data=array(
            "types"=>$types,
            "top"=>$top,
            "goods"=>$goods,
        );

        return View("home.types")->with($data);
    }
}
