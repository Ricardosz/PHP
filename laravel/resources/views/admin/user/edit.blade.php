@extends('admin.public.admin')
@section('main')
<!-- 内容 -->
<div class="col-md-10">

    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
        <li><a href="#">用户管理</a></li>
        <li class="active">用户修改</li>

        <button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
    </ol>

    <!-- 面版 -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="index.html" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 用户页面</a>
            <a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 修改用户</a>


        </div>
        <div class="panel-body">
            <form action="">
                <div class="form-group">
                    <label for="">User</label>
                    <input type="text" name="" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label for="">PASS</label>
                    <input type="password" name="" class="form-control" id="">
                </div>

                <div class="form-group">
                    <input type="submit" value="提交" class="btn btn-success">
                    <input type="reset" value="重置" class="btn btn-danger">
                </div>

            </form>
        </div>

    </div>
</div>
</div>
</div>


<!-- 修改密码的摸态框 -->
<div class="modal fade" id="editPass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title">修改密码</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">原密码</label>
                        <input type="password" name="" class="form-control" placeholder="请输入原密码" id="">
                    </div>
                    <div class="form-group">
                        <label for="">新密码</label>
                        <input type="password" name="" class="form-control" placeholder="请输入新密码" id="">
                    </div>
                    <div class="form-group">
                        <label for="">确认密码</label>
                        <input type="password" name="" class="form-control" placeholder="请再次输入密码" id="">
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" value="提交" class="btn btn-success">
                        <input type="reset" value="重置" class="btn btn-danger">
                    </div>

                    <div style="clear:both"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection