<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

//支付控制器
class PayController extends Controller
{
    //结算
    public  function  Settlement(Request $request)
    {
        //查询当前登陆者的收货地址
        //当前用户ID
        $uid=session('AdminUserInfo.id');

        //查询地址
        $addr=\DB::table("addr")->where("uid",$uid)->get();
        //接收商品数据
        $ids=$request->input('goods');
        $shop=session('shop');
        $newArr=array();
        //遍历购物车中所有商品
        foreach ($ids as $key=>$value)
        {
            foreach ($shop as $k=>$v)
            {
                //判断是否用户选择的商品
                if ($v['id']==$value)
                {
                    $newArr[]=$v;
                }
            }
        }
       return view('home.Settlement')->with("newshop",$newArr)->with("addr",$addr)->with("addr",$addr);
    }

    //支付页面
    public  function  pay($code)
    {
        //根据订单号查找所有订单
        $orders=\DB::table("orders")->where("code",$code)->get();

        return view('home.pay')->with($orders);
    }


}
