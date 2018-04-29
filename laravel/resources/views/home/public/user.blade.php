<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员中心</title>
    <link rel="stylesheet" href="/style/home/css/lenovo.css">
    <link rel="stylesheet" href="/style/admin/bs/css/bootstrap.min.css">
    <script src="/style/admin/bs/js/jquery.min.js"></script>
    <script src="/style/admin/bs/js/bootstrap.min.js"></script>
    <style>
        .navbar .navbar-brand{
            color:black;
        }

        .navbar .navbar-brand:hover{
            color:black;
        }

        .navbar-default .navbar-nav>li>a{
            color:black;
        }
        .navbar-default .navbar-nav>li>a:hover{
            color:black;

        }

        .body{
            margin-top:90px;
        }
        .list-group{
            display:none;
        }
        .panel-primary>.panel-heading{
            background-color: #000000;
        }
    </style>
</head>
<body>
@include("home.public.header")
<div class="container">



    <!-- 内容区域 -->
    <div class="row body">

        <!-- 菜单 -->
        <div class="col-md-2">


            <!-- 个人信息管理 -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title" id="sys"><span class="glyphicon glyphicon-certificate"></span> 个人信息管理</h2>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="/admin/sys/config">个人基础管理</a></li>
                    <li class="list-group-item"><a href="/admin/sys/slider">收货地址管理</a></li>
                    <li class="list-group-item"><a href="/admin/sys/ads">订单管理</a></li>
                </ul>
            </div>
        </div>

        <!-- 占位 -->
        @yield('main')
    </div>
</div>


<!-- 修改密码的摸态框 -->
<div class="modal fade" id="editPass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">修改密码</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">原密码</label>
                        <input type="password" name="" class="form-control" placeholder="请输入原密码">
                    </div>
                    <div class="form-group">
                        <label for="">新密码</label>
                        <input type="password" name="" class="form-control" placeholder="请输入新密码">
                    </div>
                    <div class="form-group">
                        <label for="">确认密码</label>
                        <input type="password" name="" class="form-control" placeholder="请再次输入密码">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" value="提交" class="btn btn-success">
                        <input type="reset" value="重置" class="btn btn-danger">
                    </div>

                    <div style="clear:both"></div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
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

    $("#{{$name}}").click();
</script>
</html>