<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>结算中心</title>
    <meta name="keywords" content="{{config('web.keywords')}}"/>
    <meta name="description" content="{{config('web.description')}}"/>
    <link rel="shortcut icon" href="/style/home/img/1.png">
    <link rel="stylesheet" href="/style/home/css/zhufu.css">
    <script src="/style/home/js/jquery.js"></script>
    <script src="/style/home/js/zhifu.js"></script>
</head>
<body>
<div id="bg-SH" class="bg-n"></div>
<div style="display:none" id="addAddr" class="box-SH box">
    <input type="hidden" id="flag1-SH" value="0">
    <input type="hidden" id="deliveridupdate-SH" value=""><a class="close" href="javascript:void(0);" onclick="closes()">╳</a>
    <ul>
        <li><label><span>* </span>收货人：</label>
            <input type="text" id="name-SH">
            <label id="alertName-SH" style="display:none;color:red">收货人不能为空</label>
        </li>
        <li><label><span>* </span>手机：</label>
            <input type="text" id="mobile-SH">
            <label> 固定电话：</label>
            <input type="text" id="phone-SH"></li>
        <li>
            <label><span>* </span>地址：</label>
            <select id="goodsProvince-SH" name="goodsProvince-SH" onchange="getCities('SH')" style=" height:25px;width:120px">
                <option value="">省份</option>
            </select>
            <select id="goodsCity-SH" name="goodsCity-SH" style=" height:25px;width:120px">
                <option value="">城市</option>
            </select>
            <select id="goodsCounty-SH" name="goodsCounty-SH" style=" height:25px;width:120px">
                <option value="">区/县</option>
            </select>
        </li>
        <li>
            <label><span>* </span>详细地址：</label>
            <input type="text" style="width:410px;" id="goodsStreet-SH">
        </li>
        <li>
            <label>邮箱：</label>
            <input type="text" id="mail-SH">
            <span style="color:red;vertical-align: middle;padding-left: 5px;">用来接收订单提醒邮件，便于您及时了解订单状态</span>
        </li>

        <li>
            <label><input type="checkbox" style="width:14px;height:14px;margin-top: -8px;" id="isCheck-SH">&nbsp;&nbsp;</label>设置为默认收货地址
        </li>
        <li>
            <label>
            </label>
            <button id="submitbtn-SH">保存收货人信息</button>
        </li>
    </ul>
</div>


@include("home.public.header1")

<div class="top_logob">
    <a href="/"><img src="/style/home/img/pic-15.jpg" class="top_logob_imga"></a>
    <img src="/style/home/img/pic-16.jpg" class="top_logob_imgb">
</div>
<form action="/orders" method="post">
    {{csrf_field()}}
<div class="wrap" style="padding-top: 40px;">
    <form class="box-01">
        <div class="box-tl">
            <p>请填写并核对以下信息</p>
        </div>
        <div class="box-a" id="box-a">
            <p>收货信息：
                <span class="showbtn-SH showbtn new_p">
                    <span style="cursor:pointer;" onclick="opens()">＋新增收货地址</span>
                        </span>
            </p>
            <script>
                function opens() {
                    $("#addAddr").show();
                }
                function closes() {
                    $("#addAddr").hide();
                }
            </script>
            <div id="addressList-SH">
                @foreach($addr as $Address)
                    <p>
                        <input type="radio" name="aid" id="" value="{{$Address->id}}" checked>
                        <span>{{$Address->sname}}</span>
                        <span>{{$Address->stel}}</span>
                        <span>{{$Address->addr}}</span>
                        <span>{{$Address->addrInfo}}</span>
                    </p>
                    @endforeach
            </div>

        </div>




        <div class="box-d" id="box-d" style="display:none">
        </div>

        <div class="box-02" id="productList">
            <div class="box-tl"><p><a href="getcart.jhtm" latag="latag_pc_ordersubmit_backtocart">返回购物车修改&gt;</a>确认商品
                </p>
            </div>
            <div class="box-ls" style="margin-bottom: -20px;">
                <p class="tl-a">&nbsp;</p>
                <p class="tl-b">商品名称</p>
                <p class="tl-c">单价</p>
                <p class="tl-d">数量</p>
                <p class="tl-e">金额</p></div>
            <div class="divide" style="margin-top: 20px;border-bottom: 1px solid #d9d8d6;">
            </div>

            <?php
                $tot=0;
            ?>
            @foreach($newshop as $shop)
            <div class="list" id="52771" style="border-bottom: none;">
                <input type="hidden" name="ids[]" id="" value="{{$shop['id']}}">
                <input type="hidden" name="nums[]" id="" value="{{$shop['num']}}">
                <input type="hidden" name="prices[]" id="" value="{{$shop['goodsInfo']->price}}">
                <p class="list-a">
                    <a href="/goods/{{$shop['id']}}" title="{{$shop['goodsInfo']->title}}">
                        <img src="/Uploads/Goods/{{$shop['goodsInfo']->img}}" height="100px" width="100px" title="{{$shop['goodsInfo']->title}}"></a>
                </p>
                <p class="list-b">
                    <a href="/goods/{{$shop['id']}}" title="{{$shop['goodsInfo']->title}}">{{$shop['goodsInfo']->title}}</a>
                </p>

                <p class="list-c">{{$shop['goodsInfo']->price}}</p>
                <p class="list-d">{{$shop['num']}}</p>
                <?php
                    $money=$shop['goodsInfo']->price*$shop['num'];
                    $tot+=$money;
                ?>
                <p class="list-e">{{$money}}</p>

            </div>
            @endforeach



    </div>

    ﻿


    <div class="box-06 clearfix" id="discountinfo" style="display: block;">
        <p>
            <span>商品总价：
                <em style="color: #e2231a;font-weight: bold;font-style: normal;" id="totalPrice">￥{{$tot}}
                </em>元
            </span>
        </p>
    </div>

    </form>



        <p id="submitbutton" style="margin-bottom: 15px;">
            <button style="font-size: 18px;cursor: pointer;margin-top: 2px;">提交订单</button>
        </p>
    </div>
    <div id="orderformDiv"></div>


<div class="footer">
    <img src="/style/home/img/99999.png" alt="">

    <img src="/style/home/img/9999.png" alt="">
</div>

</body>
</html>