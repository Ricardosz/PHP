<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//商品详情控制器
class GoodsController extends Controller
{
    //商品详情首页
    public function index()
    {
        return View("home.goods");
    }
}
