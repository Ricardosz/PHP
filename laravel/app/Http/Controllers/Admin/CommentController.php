<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//评论管理控制器
class CommentController extends Controller
{
    //评论管理首页
    public  function  index(Request $request)
    {
        //多表查询
        $data=\DB::table("comment")
                ->select("comment.*","goods.title","goods.img as gimg","user.name")
                ->join("user","user.id","=","comment.uid")
                ->join("goods","goods.id","=","comment.gid")
                ->get();
        //加载页面
        return view("admin.comment.index")->with("data",$data);

    }

    //修改评论状态
    public function  ajaxStatu(Request $request)
    {
        $arr=$request->except("_token");
       $sql="update comment set statu=$arr[statu] WHERE  id=$arr[id]";
       if (\DB::update($sql))
       {
           return 1;
       }else
           {
               return 0;
           }
    }
}
