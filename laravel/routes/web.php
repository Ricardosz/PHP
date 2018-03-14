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

    //后台系统管理
        //系统管理
        Route::resource("sys/config","ConfigsController");
        //轮播图管理
        Route::resource("sys/slider","SliderController");
        //广告管理
        Route::resource("sys/ads","AdsController");
        //分类广告管理
        Route::resource("sys/types","TypesAdsController");
    
});
//登陆路由
Route::get('admin/login','Admin\LoginController@index');
//验证码

Route::get('admin/yzm','Admin\LoginController@yzm');


    
    