<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//订单控制器
class OrderController extends Controller
{
    //生成订单
    public  function orders(Request $request)
    {
        //收货地址
        $aid=$request->input('aid');
        //商品
        $ids=$request->input('ids');
        //数量
        $nums=$request->input('nums');
        //当前用户ID
        $uid=session('AdminUserInfo.id');
        //生成订单号
        $code="DZ_".time().rand();
        //订单生成时间
        $time=time();
        //获取价格
        $prices=$request->input('prices');
        //生成订单
        for ($i=0;$i<count($ids);$i++)
        {
            //格式化数据
            $data=array();
            $data['code']=$code;
            $data['time']=$time;
            $data['uid']=$uid;
            $data['aid']=$aid;
            $data['sid']=1;
            $data['gid']=$ids[$i];
            $data['num']=$nums[$i];
            $data['price']=$prices[$i];
            \DB::table('orders')->insert($data);
        }
        //删除session中的对应数据
        $shop=session('shop');
        //遍历数据
        foreach ($shop as $key=>$value)
        {
           foreach ($ids as $k=>$V)
           {
               if($V==$value['id'])
               {
                   unset($shop[$key]);
               }
           }
        }
        //重新写入session
        $request->session()->put('shop', $shop);
        //跳转到支付页面

        return redirect("pay/$code");

    }
}
