<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//商品详情控制器
class GoodsController extends Controller
{
    //商品详情首页
    public function index($id)
    {

        //获取商品相关数据
        $goods=\DB::table("goods")->where("id",$id)->first();
        //获取商品图片
        $goodsImg=\DB::table("goodsImg")->where("gid",$id)->get();
        //查询商品对应的评论
        //评论总数
        $commentTot=\DB::table("comment")->where("gid",$id)->count();
        //好评
        $GoodTot=\DB::table("comment")->where([["gid",'=',$id],["start",">",4]])->get()->count();
        //差评
        $BadTot=\DB::table("comment")->where([["gid",'=',$id],["start","<",2]])->get()->count();
        //中评
        $GeneralTot=$commentTot-$GoodTot-$BadTot;
        //评价信息
        $comment=\DB::table("comment")->where("gid",$id)->get();
        //评价相关信息
        $Evaluation=array(
            'commentTot'=>$commentTot,
            'GoodTot'=>$GoodTot,
            'BadTot'=>$BadTot,
            'GeneralTot'=>$GeneralTot,

        );

        //格式化数据
        $data=array(
            "goods"=>$goods,
            "goodsImg"=>$goodsImg,
            'Evaluation'=>$Evaluation,
            'comment'=>$comment
        );
        return View("home.goods")->with($data);
    }
}
