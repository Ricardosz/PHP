<!-- 头 -->
<!-- 顶部 -->
<div class='nav'>
  <div class="top">
   <div class="nav-right">
      <ul>
<<<<<<< HEAD
	   <li> <a href="/user" target="_blank">会员中心</a><span>|</span> </li>
		<li> <a href="#" target="_blank">我的订单</a><span>|</span> </li>
	  <li> <a href="/car" target="_blank" class="cart">购物车（0）</a><span>|</span> </li>
	   @if(session('UserInfo.id'))
        <li><a  href="">欢迎:{{session('UserInfo.email')?:session('UserInfo.name')}}</a></li>
        <li><a href="/logout">退出</a><span class="gang">|</span></li>
        @else
      <li> <a href="/login" target="_blank">【 登 录 】</a><span>|</span> </li>
      <li> <a href="/reg" target="_blank">【 免费注册 】</a><span>|</span> </li>
      @endif
=======
        <li>
          <a style="position:relative" href="/car">购物车
          <span class="guo">0</span>
          </a>
        </li>
          @if(session('AdminUserInfo.id'))
              <li><a class="zc" href="">欢迎:{{session('AdminUserInfo.email')?:session('AdminUserInfo.name')}}</a><span class="gang">|</span></li>
              <li><a class="zc" href="/logout">退出</a><span class="gang">|</span></li>
          @else
              <li><a class="zc" href="/reg">注册</a><span class="gang">|</span></li>
              <li><a class="dl"href="/login">登陆</a><span class="gang">|</span></li>
          @endif
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
      </ul> 
    </div>
 </div> 
</div>
<<<<<<< HEAD


=======
<!-- 顶部图片 -->
<div class='container header'>
<a href="http://www.lenovo.com.cn/activity/marketing/yoga5prof/index.html" title="" target="_blank" >
    <img id='imgs
    'src="/style/home/img/3.png" alt="" width='1200px' height="101px">
</a>
<a href="javascript:;"><span id='close'>&times;</span></a>
</div>
<!-- 中 -->
<!-- <div class="middle">
 <!-- 搜索 -->
<div class="container search">
   <div class="search-left">
     <a href="http://shuaizai.com"><img src="/Uploads/Sys/{{config('web.logo')}}" alt=""></a>
   </div>
   <div class="search-right">
      <div class="fang">
        <span class="da" ></span>
      </div>
      <input type="text" placeholder="miix5">
   </div>
   <div class="clear"></div>
</div>
>>>>>>> bc22745cc7577ecfc461790f8ac735360a2d4939
