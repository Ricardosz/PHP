<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//前台路由
  
  //主页
  Route::get("/",'Home\IndexController@index');
  
  //分类页面
  Route::get("/types/{id}",'Home\TypesController@index');
  
  //商品详情页面 
  Route::get('/goods/{id}','Home\GoodsController@index');
  

//后台路由
Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware'=>'adminLogin'], function() {
    //
    //后台首页
    Route::get('/', 'IndexController@index');

    //后台管理员
    
    Route::resource('admin', 'AdminController');

    //后台管理员状态修改路由
    Route::post('admin/ajaxStatus','AdminController@ajaxStatus');
    
    //后台用户管理
    Route::get('user', 'UserController@index');
    
    //后台分类管理
    Route::resource('types','TypesController');

    //后台商品管理
    Route::resource("goods","GoodsController");

    //后台订单管理
    Route::get("orders","OrdersController@index");
            //后台查看订单详情
            Route::get("orders/list","OrdersController@lists");
            //后台查看收货地址
            Route::get("orders/addr","OrdersController@addr");
            //修改订单状态
            Route::any("orders/edit","OrdersController@edit");
            //订单状态
            Route::get("orders/statu","OrdersController@statuList");
            //订单状态修改
            Route::post("orders/statu/edit","OrdersController@statuEdit");

     //后台评论管理
    Route::get("comment","CommentController@index");
    Route::post("comment/ajaxStatu","CommentController@ajaxStatu");
    //后台系统管理
        //系统管理
        Route::resource("sys/config","ConfigsController");
        //轮播图管理
        Route::resource("sys/slider","SliderController");
        //广告管理
        Route::resource("sys/ads","AdsController");
        //分类广告管理
        Route::resource("sys/types","TypesAdsController");
    //缓存
    Route::get("Huancun","HuancunController@index");
});

//登陆路由
Route::get('admin/login','Admin\LoginController@index');
    //登陆操作
    Route::post("admin/check","Admin\LoginController@check");
    //注销
    Route::get("admin/logout","Admin\LoginController@logout");

//验证码
Route::get('admin/yzm','Admin\LoginController@yzm');

//文件上传
Route::post('admin/shangchuan','Admin\CommonController@upload');

//清除缓存
Route::get('admin/flush','Admin\IndexController@flush');
    
    