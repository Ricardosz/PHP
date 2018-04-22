<?php

namespace App\Http\Controllers\Home;

<<<<<<< HEAD
use App\model\order;
=======
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
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
<<<<<<< HEAD

        $uid=session('UserInfo.id');

        if (isset($uid)){
=======
        $uid=session('AdminUserInfo.id');
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939

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
<<<<<<< HEAD

        return view('home.Settlement')->with("newshop",$newArr)->with("addr",$addr);
        }
        else{
            return redirect('/login');
        }
=======
       return view('home.Settlement')->with("newshop",$newArr)->with("addr",$addr)->with("addr",$addr);
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
    }

    //支付页面
    public  function  pay($code)
    {
        //根据订单号查找所有订单
        $orders=\DB::table("orders")->where("code",$code)->get();

<<<<<<< HEAD
        return view('home.pay')->with("orders",$orders);
    }

    //支付完成
    public function Complete(Request $request)
    {
        $code=$request->input('code');
       //更新订单状态
        $result=order::UpdateOrdersStatus($code,4);
        $data=order::FindOrdersInfoByCode($code);
        return view('home.complete')->with("data",$data)->with("code",$code);
    }




=======
        return view('home.pay')->with($orders);
    }

>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939

}
