<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>收银台</title>
    <meta name="keywords" content="<?php echo e(config('web.keywords')); ?>"/>
    <meta name="description" content="<?php echo e(config('web.description')); ?>"/>
	<link rel="shortcut icon" href="/style/home/img/1.png">
	<link rel="stylesheet" href="/style/home/css/money.css">
	<script src="/style/home/js/jquery.js"></script>
	<script src="/style/home/js/money.js"></script>
</head>
<body>
	<div class="header">
    <div class="user_content">
        <div class="userinfo">
            <a href="http://www.lenovo.com.cn/">
                <span class="toIndex">
                        返回首页
                </span>
            </a>|
            <a href="http://i.lenovo.com.cn/info/center.jhtml?sts=e40e7004-4c8a-4963-8564-31271a8337d8">
                <span class="username">15364711138</span>
            </a>|
            <a href="http://order.lenovo.com.cn/center/orderlist.jhtm?merchantId=1">
                <span class="order">
                        我的订单
                </span>
            </a>|
            <span class="logout">退出</span>
        </div>
    </div>
</div>
<div class="steps">
    <div class="pageInfo">
        <a href="javascript:void(0)" class="logo"></a>
    </div>
    <div class="step step_pay">
        <ul>
            <li class="step1">我的购物车</li>
            <li class="step2">填写核对订单</li>
            <li class="step3 current">确认支付</li>
        </ul>
    </div>
</div>
<div class="content_wrapper">
<div class="info">
    <div class="con">
        <div class="left">
        	<em class="icon"></em>
        </div>
        <div class="right">
            <div class="detail">
                <p>订单提交完成，请您尽快付款！
                	<span id="ledou_span">支付成功将赠送您一定比例的乐豆，使用乐豆可抵用现金，积分相关内容请到个人中心查看~</span></p>
                <p id="dead_time_p">请您在<span class="dead_time" id="dead_time">2016-11-11 14:50:20</span>前完成支付，订单失效期：<span class="persist_time" id="persist_time">60分钟</span> </p>
                <p id="order_show_msg_p"></p>
                <ul>
					 <li class="syt_huanh">
                            <label>
                            	<input type="checkbox" name="order" value="46667520010" onchange="getOrderPayType(this)">订单号：4666752
                                <span>&nbsp;&nbsp;商品名称: ThinkPad 黑将S5 20G4A000CD 黑色&nbsp;&nbsp;</span>
                            </label>
                            <div class="deliver_hid hidden" id="deliver46667520010">张三 182****1110 北京_北京_昌平_天安门</div>
                            <div class="vatDeliver_hid hidden" id="vatDeliver46667520010"></div>
                            <div class="receiver_hid hidden">由联想(上海)有限公司发货</div>
                            <div class="invoice_hid hidden" id="taxCompany46667520010">个人</div>
                            <div class="dead_time_hid hidden">2016-11-11 14:50:20</div>
                            <div class="persist_time_hid hidden">60分钟</div>
                            <div class="show_msg_hid hidden"></div>
                            <div class="amountMoney_hid hidden">6699.00</div>
                            <div class="orderAddType_hid hidden">0</div>
                            <div class="ledou_num_hid hidden">0</div>
                            
                            <input type="hidden" id="amountMoney_hid" value="6699.00">  
                            <input type="hidden" id="hbOrderMeg_hid" value="4666752订单收款方信息：此物品是联想正品 由联想(上海)有限公司发货">
                        </li>
                    </ul>
                <input type="hidden" id="orders" value="4666752;">
                <input type="hidden" id="products" value="ThinkPad 黑将S5 20G4A000CD 黑色&amp;&amp;">
                <input type="hidden" id="lenovoId" value="10090423014">
                <input type="hidden" id="plat" value="4">
                <input type="hidden" id="shopId" value="1">
                <input type="hidden" id="terminal" value="1">
                <input type="hidden" id="isHb" value="0">
                <input type="hidden" id="wxsmflag" value="1">
                <input type="hidden" id="merchantid" value="b2c">
                <div class="money">
                    <p>应付金额：<span class="total">6699元</span></p>
                    <a class="show_more" href="javascript:void(0)">
                    	<span style="float:right;">订单详情</span>
                    	<em id="em_order_detail" class="down"></em>
                    </a>
                </div>
            
            </div>
            <div class="more clear">
                <ul class="address" id="address"> 
                <li >收货信息：<span>张三 182****1110 北京_北京_昌平_天安门</span>
                </li>
                <li>收款方信息：此物品是联想正品 <span>由联想(上海)有限公司发货</span>
                </li>
                <li>发票信息：<span>个人</span></li></ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="payment">
<div class="title">请选择支付方式</div>
<div class="pay_types" id="pay_types">



<div id="pay_type4" class="pay_type4 noborder" style="overflow: auto;">
   <a href="/Complete?code= <?php echo e($orders[0]->code); ?>" id="hbFenqi-pay-button" url-data="">现在支付</a>



</div>
   
    <div class="clear"></div>
</div>
</div>
</div>

    <div class="clear"></div>
</div>
</div>
</div>
<!--*************支付统一区域结束************-->
<!--*************Footer开始************-->
<div class="footer">
    <div class="ns_footer_line">
        <a href="http://appserver.lenovo.com.cn/About/index.aspx" title="关于联想" target="_blank">关于联想</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn/Public/public_bottom/contact.shtml" title="联系我们" target="_blank">联系我们</a>
        <span>|</span><a href="http://www.lenovocareers.com/chi/index.html" title="工作机会" target="_blank">工作机会</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn//About/news_center.aspx" title="新闻中心" target="_blank">新闻中心</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn/LenovoMap/LenovoMap_Direct.aspx?intcmp=MAP20140730_1" title=" 销售网点" target="_blank">
        <em class="usepng icon_addr1"></em>销售网点</a>
        <span>|</span><a href="http://support1.lenovo.com.cn/lenovo/wsi/station/servicestation/default.aspx?intcmp=MAP20140730_2" title=" 服务网点" target="_blank">
        <em class="usepng icon_addr2"></em>服务网点</a>
    </div>
    <div class="ns_footer_line">版权所有：1998-2016 联想集团
        <span>|</span><a href="http://appserver.lenovo.com.cn/Public/public_bottom/legal.shtml" title="法律公告" target="_blank">法律公告</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn/Public/public_bottom/privacy.shtml" title="隐私保护" target="_blank">隐私保护</a>
        <span>|</span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11035381</a><span>|</span><i>京公网安备110108007970号</i>
        <span>|</span><a href="http://pic.shop.lenovo.com.cn/g1/M00/01/3C/CmBZD1aLdE-AHmSmAAJk4Nd8ReY449.jpg" title="营业执照" target="_blank">营业执照：110000410127232</a>
    </div>
</div>





</body>
</html>


