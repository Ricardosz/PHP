<?php

namespace App\Http\Controllers\admin;

use App\model\order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//订单管理控制器
class OrdersController extends Controller
{
    //订单首页
    public function index()
    {
        //相关数据查询(多表查询)
        $data = \DB::table("orders")->select("orders.*", "orders.code as code", "user.name", "orderstatu.name as ssname")
            ->join("user", "user.id", "orders.uid")
            ->join("orderstatu", "orders.sid", "=", "orderstatu.id")
            ->get();
        //利用数组合并相同key值的数据
        $newArr = array();
        foreach ($data as $key => $value) {
            $newArr[$value->code] = $value;
        }

        return view("admin.orders.index")->with("data", $newArr);
    }

    //查看订单详情
    public function lists(Request $request)
    {
        //获取订单号
        $code = $request->input("code");
        //查询订单号下所有商品
        $data = \DB::table("orders")->select("orders.*", "sku.title", "sku.img","goods.name")
            ->join("goods", "goods.id", "=", "orders.gid")
            ->join("sku","sku.gid","=","goods.id")
            ->where("code", $code)->get();
        //数据展现到页面
        return view("admin.orders.lists")->with("data", $data);
    }

    //后台查看收货地址
    public function addr()
    {
        //获取数据
        $id = $_GET['id'];
        //查询订单收货地址信息
        $data = \DB::table("addr")->find($id);
        //加载页面
        return view("admin.orders.addr")->with("data", $data);
    }

    //修改订单状态
    public function edit(Request $request)
    {
        if ($_POST) {
           $sid = $request->input("sid");
           $code = $request->input("code");
           $sql="update orders set sid=$sid where code='$code'";
           //执行SQL更新
           if (\DB::update($sql))
           {
               return redirect("admin/orders");
           }else{
               return back();
           }
        }
        else {
            $sid = $request->input("sid");
            $code = $request->input("code");
            //查询所有订单状态
            $data = \DB::table("orderstatu")->get();
            return view("admin.orders.edit")->with("data", $data);
        }
    }

    //后台订单状态管理
    public function  statuList()
    {
        //查询数据
        $data=\DB::table('orderstatu')->get();
        //加载页面
        return view("admin.orders.statuList")->with("data",$data);
    }
    //后台订单状态修改
    public  function  statuEdit(Request $request)
    {
        $name=$request->input('name');
        $id=$request->input('id');
        $sql="update orderstatu set name='$name' WHERE  id='$id'";
        if (\DB::update($sql))
        {
            return 1;
        }
        else
        {
            return  0;
        }
    }


}
