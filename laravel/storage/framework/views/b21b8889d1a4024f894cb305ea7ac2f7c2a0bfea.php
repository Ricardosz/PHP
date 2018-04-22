<!-- 头 -->
<?php echo $__env->make("home.public.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<link rel="stylesheet" href="/style/home/css/lenovo.css">
<script src="/style/home/js/jquery.js"></script>
<link rel="stylesheet" href="/style/admin/bs/css/bootstrap.min.css">
<script src="/style/admin/bs/js/bootstrap.min.js"></script>

<div class="container">
<div class="row body">
    <div class="col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title" id="admin"><span class="glyphicon glyphicon-user"></span> 管理员管理</h2>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><a href="/user">用户个人信息</a></li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item"><a href="/">用户个人订单</a></li>
            </ul>
        </div>
    </div>
    <?php echo $__env->yieldContent('main'); ?>
</div>
</div>
<?php

// 获取URL地址参数

$path=$_SERVER['REDIRECT_URL'];

// 分割字符串

$arr=explode('/', $path);

// 获取名

$name=isset($arr[2])?$arr[2]:'';

?>
<script>
    // 菜单切换
    $(".panel-title").click(function(){
        $(".list-group").hide();
        $(this).parent().next().toggle(500);
    });

    $("#<?php echo e($name); ?>").click();
</script>