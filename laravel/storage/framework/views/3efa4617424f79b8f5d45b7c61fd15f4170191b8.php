<!-- 头 -->
<!-- 顶部 -->
<div class='nav'>
  <div class="top">
   <div class="nav-right">
      <ul>
	   <li> <a href="/user" target="_blank">会员中心</a><span>|</span> </li>
		<li> <a href="#" target="_blank">我的订单</a><span>|</span> </li>
	  <li> <a href="/car" target="_blank" class="cart">购物车（0）</a><span>|</span> </li>
	   <?php if(session('UserInfo.id')): ?>
        <li><a  href="">欢迎:<?php echo e(session('UserInfo.email')?:session('UserInfo.name')); ?></a></li>
        <li><a href="/logout">退出</a><span class="gang">|</span></li>
        <?php else: ?>
      <li> <a href="/login" target="_blank">【 登 录 】</a><span>|</span> </li>
      <li> <a href="/reg" target="_blank">【 免费注册 】</a><span>|</span> </li>
      <?php endif; ?>
      </ul> 
    </div>
 </div> 
</div>


