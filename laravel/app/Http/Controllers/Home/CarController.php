<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//购物车控制器
class CarController extends Controller
{
    //加载购物车首页
    public function index()
    {
<<<<<<< HEAD


=======
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
        $shop = session('shop');
        return view('home.car')->with('shop', $shop);
    }

    //加入购物车
    public function addCar(Request $request)
    {
<<<<<<< HEAD

=======
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
        $a=0;
        $data = session('shop') ? session('shop') : array();
        if ($data) {
            foreach ($data as $key => &$value) {
<<<<<<< HEAD
                if ($value['id'] == $_GET['sid']) {
=======
                if ($value['id'] == $_GET['id']) {
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
                    $value['num'] = $value['num'] + $_GET['num'];
                    $a = 1;
                }
            }
        }
        if (!$a){
            $data[] = array(
<<<<<<< HEAD
                "id" => $_GET['sid'],
                "num" => $_GET['num'],

                'goodsInfo' => \DB::table("sku")
                                ->select("sku.*")
                                ->where("sku.id", $_GET['sid'])->first(),
=======
                "id" => $_GET['id'],
                "num" => $_GET['num'],
                'goodsInfo' => \DB::table('goods')->where("id", $_GET['id'])->first(),
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
            );
        }

        $request->session()->put('shop', $data);
        return redirect('car');
    }

    //购物车Ajax添加
    public function CarAdd(Request $request)
    {
        $id=$request->input('id');
        $shop = session('shop');
        foreach ($shop as $key=>$value)
        {
            if ($value['id']==$id)
            {
                $shop[$key]['num']=++$shop[$key]['num'];
            }
        }
        $request->session()->put('shop', $shop);
    }
    //购物车Ajax减少
    public function CarCut(Request $request)
    {
        $id=$request->input('id');
        $shop = session('shop');
        foreach ($shop as $key=>$value)
        {
            if ($value['id']==$id)
            {
                $shop[$key]['num']=--$shop[$key]['num'];
            }
        }
        $request->session()->put('shop', $shop);
    }

    //购物车删除
    public  function  CarDel(Request $request)
    {
        $id=$request->input('id');
        //获取购物车中所有商品数据
        $shop=session('shop');
        //遍历数据
        foreach ($shop as $key=>$value)
        {
            if($value['id']==$id)
            {
                unset($shop[$key]);
            }
        }
        //重新写入session
        $request->session()->put('shop', $shop);
        //返回结果
       return 1;

    }
}
