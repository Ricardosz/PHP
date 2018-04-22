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
<<<<<<< HEAD
Route::namespace('Home')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    //主页
    Route::get("/",'IndexController@index');
    //分类页面
    Route::get("/types/{id}",'TypesController@index');
    //商品详情页面
    Route::get('/goods/{id}/{sid?}','GoodsController@index');
    //前台登陆
    Route::get('/login','LoginController@index');
    //前台注册
    Route::get('/reg','RegController@index');
    //处理注册
    Route::post('/regCheck','RegController@check');
    //发送邮件
    Route::get('SendEmail','RegController@SendEmail');
    //激活地址
    Route::get('activate/{id}/{token}','RegController@activate');
    //验证码
    Route::get('/yzm','RegController@yzm');
    //登陆操作
    Route::post("/check","LoginController@check");
    //退出
    Route::get("/logout","LoginController@logout");
    //找回密码
    Route::any("/findPwd","LoginController@findPwd");
    //修改密码
    Route::any('/savePwd/{id}/{token}',"LoginController@savePwd");
    //购物车页面
    Route::get('car','CarController@index');
    //加入购物车
    Route::get('addCar','CarController@addCar');
    //购物车Ajax调整数量
    Route::post('CarAdd','CarController@CarAdd');
    Route::post('CarCut','CarController@CarCut');
    //购物车删除
    Route::post('CarDel','CarController@CarDel');
    //结算
    Route::post('Settlement','PayController@Settlement');
    //生成订单
    Route::post('orders','OrderController@orders');
    //支付
    Route::get('pay/{code}','PayController@Pay');
    //已支付
    Route::get('Complete',"PayController@Complete");
    //个人信息
    Route::resource('user',"UserController");
});
=======
    //主页
    Route::get("/",'Home\IndexController@index');
    //分类页面
    Route::get("/types/{id}",'Home\TypesController@index');
    //商品详情页面
    Route::get('/goods/{id}','Home\GoodsController@index');
    //前台登陆
    Route::get('/login','Home\LoginController@index');
    //前台注册
    Route::get('/reg','Home\RegController@index');
    //处理注册
    Route::post('/regCheck','Home\RegController@check');
    //发送邮件
    Route::get('SendEmail','Home\RegController@SendEmail');
    //激活地址
    Route::get('activate/{id}/{token}','Home\RegController@activate');
    //验证码
    Route::get('/yzm','Home\RegController@yzm');
    //登陆操作
    Route::post("/check","Home\LoginController@check");
    //退出
    Route::get("/logout","Home\LoginController@logout");
    //找回密码
    Route::any("/findPwd","Home\LoginController@findPwd");
    //修改密码
    Route::any('/savePwd/{id}/{token}',"Home\LoginController@savePwd");
    //购物车页面
    Route::get('car','Home\CarController@index');
    //加入购物车
    Route::get('addCar','Home\CarController@addCar');
    //购物车Ajax调整数量
    Route::post('CarAdd','Home\CarController@CarAdd');
    Route::post('CarCut','Home\CarController@CarCut');
    //购物车删除
    Route::post('CarDel','Home\CarController@CarDel');
    //结算
    Route::post('Settlement','Home\PayController@Settlement');
    //生成订单
    Route::post('orders','Home\OrderController@orders');
    //支付
    Route::get('pay/{code}','Home\PayController@Pay');
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939



//后台路由
Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware'=>'adminLogin'], function() {
    //后台首页
    Route::get('/', 'IndexController@index');

    //后台管理员
    
    Route::resource('admin', 'AdminController')->middleware('Role:Sys');

    //后台管理员状态修改路由
    Route::post('admin/ajaxStatus','AdminController@ajaxStatus')->middleware('Role:Sys');

    //后台用户管理
    Route::get('user', 'UserController@index')->middleware('Role:Sys');
    
    //后台分类管理
    Route::resource('types','TypesController')->middleware('Role:shop');
    //后台分类属性名管理
    Route::resource('attribute','AttributeController')->middleware('Role:shop');
    //后台商品管理
    Route::resource("goods","GoodsController")->middleware('Role:shop');
        //后台商品库存管理
        Route::resource("Sku","SkuController")->middleware('Role:shop');
    //后台订单管理
    Route::get("orders","OrdersController@index")->middleware('Role:shop');
            //后台查看订单详情
            Route::get("orders/list","OrdersController@lists")->middleware('Role:shop');
            //后台查看收货地址
            Route::get("orders/addr","OrdersController@addr")->middleware('Role:shop');
            //修改订单状态
            Route::any("orders/edit","OrdersController@edit")->middleware('Role:shop');
            //订单状态
            Route::get("orders/statu","OrdersController@statuList")->middleware('Role:shop');
            //订单状态修改
            Route::post("orders/statu/edit","OrdersController@statuEdit")->middleware('Role:shop');

     //后台评论管理
    Route::get("comment","CommentController@index")->middleware('Role:shop');
    Route::post("comment/ajaxStatu","CommentController@ajaxStatu")->middleware('Role:shop');

    //后台系统管理
        //系统管理
        Route::resource("sys/config","ConfigsController")->middleware('Role:Sys');
        //轮播图管理
        Route::resource("sys/slider","SliderController")->middleware('Role:shop');
        //广告管理
        Route::resource("sys/ads","AdsController")->middleware('Role:shop');
        //分类广告管理
<<<<<<< HEAD
        Route::resource("sys/types","TypesAdsController")->middleware('Role:shop');

    //用户权限管理
        Route::resource('role','RoleController')->middleware('Role:Sys');
        //后台角色状态更改
        Route::post('role/ajaxStatus','RoleController@ajaxStatus')->middleware('Role:Sys');
        //后台访问权限
        Route::resource('Permissions','PremissionController')->middleware('Role:Sys');
        //后台访问权限状态更改
        Route::post('Permissions/ajaxStatus','PremissionController@ajaxStatus')->middleware('Role:Sys');

=======
        Route::resource("sys/types","TypesAdsController");
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
});

//登陆操作
Route::namespace('Admin')->prefix('admin')->group(function () {
//登陆路由
    Route::get('login', 'LoginController@index');
//登陆操作
    Route::post("check", "LoginController@check");
//注销
    Route::get("logout", "LoginController@logout");
//验证码
    Route::get('yzm', 'LoginController@yzm');
//文件上传
    Route::post('shangchuan', 'CommonController@upload');
//清除缓存
    Route::get('flush', 'IndexController@flush');
});