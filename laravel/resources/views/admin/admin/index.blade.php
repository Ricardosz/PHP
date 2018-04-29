@extends('admin.public.admin')

@section('main')
    <!-- 内容 -->
    <div class="col-md-10">

        <ol class="breadcrumb">
            <li><a href="/admin"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="#">管理员管理</a></li>
            <li class="active">管理员列表</li>

            <button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
        </ol>

        <!-- 面版 -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
                <!--  <a href="/admin/admin/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a>-->
                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a>

                <p class="pull-right tots" >共有 <span id="tot">{{$tot}}</span> 条数据</p>
                <form action="" class="form-inline pull-right">
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容" >
                    </div>

                    <input type="submit" value="搜索" class="btn btn-success">
                </form>


            </div>
            <table class="table-bordered table table-hover">
                <th><input type="checkbox" name="" ></th>
                <th>ID</th>
                <th>用户名</th>
                <th>所属角色</th>
                <th>最近一次登录时间</th>
                <th>状态</th>
                <th>操作</th>

                @foreach($data as $value)
                    <tr>
                        <td><input type="checkbox" name="" ></td>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->display_name}}</td>
                        <td>{{$value->updated_time}}</td>
                        @if($value->status)
                            <td><span class="btn btn-danger" onclick="status(this,{{$value->id}},1)">禁用</span></td>
                        @else

                            <td><span class="btn btn-success" onclick="status(this,{{$value->id}},0)">正常</span></td>
                        @endif

                        <td><a href="#" onclick="edit({{$value->id}})" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="#" onclick="deletes(this,{{$value->id}})" class="glyphicon glyphicon-trash"></a></td>
                    </tr>
                @endforeach


            </table>
            <!-- 分页效果 -->
            <div class="panel-footer">
                {{ $data->links() }}

            </div>
        </div>
    </div>
    <!-- 添加页面模态框 -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">添加管理员</h4>
                </div>
                <div class="modal-body">
                    <form action="" onsubmit="return false;" id="formAdd">
                        <div class="form-group">
                            <label for="">用户名</label>
                            <input type="text" name="name" class="form-control" placeholder="请输入用户名">
                        </div>

                        <div class="form-group">
                            <label for="">用户所属角色组</label>
                            <select name="rid"   class="form-control">
                                @foreach($role as $value)
                                    <option  value="{{$value->id}}" >{{$value->display_name}}</option>
                                @endforeach()
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">密码</label>
                            <input type="password" name="pass" class="form-control" placeholder="请输入新密码">
                            <div id="passInfo">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">确认密码</label>
                            <input type="password" name="repass" class="form-control" placeholder="请再次输入密码">
                        </div>
                        <div class="form-group">
                            <label for="">状态</label>
                            <br>
                            <input type="radio" name="status" checked value="0" >正常
                            <input type="radio" name="status" value="1">禁用
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" value="提交" onclick="add()" class="btn btn-success">
                            <input type="reset" id="reset" value="重置" class="btn btn-danger">
                        </div>

                        <div style="clear:both"></div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- 修改页面模态框 -->
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">修改管理员</h4>
                </div>
                <div class="modal-body" id="body">

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>

        // ajax修改数据

        function save(){
            // 表单序列化

            str=$("#formEdit").serialize();

            // 提交到下一个页面

            $.post("/admin/admin/1",{str:str,"_method":'put','_token':'{{csrf_token()}}'},function(data){

                // 判断data
                if (data==1) {

                    window.location.reload();

                }else if(data){


                    // 密码提示信息

                    if (data.pass) {
                        str="<div class='alert alert-danger'>"+data.pass+"</div>";
                    }else{
                        str="<div class='alert alert-success'>√</div>";
                    }

                    $("#passInfo1").html(str);



                }else{
                    alert('添加失败');
                }
            });
        }
        // ajax修改的方法

        function edit(id){
            // 发送ajax请求
            $.get("/admin/admin/"+id+"/edit",{},function(data){

                if (data) {

                    $("#body").html(data);
                };

            });

        }
        // ajax修改状态

        function status(obj,id,status){

            // 发送ajax请求

            if (status) {
                // 发送ajax请求

                $.post('/admin/admin/ajaxStatus',{id:id,"_token":"{{csrf_token()}}","status":"0"},function(data){

                    if (data==1) {
                        $(obj).parent().html('<td><span class="btn btn-success" onclick="status(this,'+id+',0)">正常</span></td>')
                    }else{

                        alert('修改失败');
                    }

                })
            }else{

                $.post('/admin/admin/ajaxStatus',{id:id,"_token":"{{csrf_token()}}","status":"1"},function(data){

                    if (data==1) {
                        $(obj).parent().html('<td><span class="btn btn-danger" onclick="status(this,'+id+',1)">禁用</span></td>')
                    }else{

                        alert('修改失败');
                    }

                })
            }
        }

        // ajax删除

        function deletes(obj,id){
            // 发送ajax请求

            $.post("/admin/admin/"+id,{"_token":'{{csrf_token()}}',"_method":"delete"},function(data){
                // 判断是否成功

                if (data==1) {
                    // 移除数据

                    $(obj).parent().parent().remove();

                    // 数量计算

                    tot=Number($("#tot").html());

                    $("#tot").html(--tot);
                }else{
                    alert('删除失败');
                }
            })
        }
        // 添加的处理操作

        function add(){
            // 表单序列化

            str=$("#formAdd").serialize();

            // 提交到下一个页面

            $.post('/admin/admin',{str:str,'_token':'{{csrf_token()}}'},function(data){

              // 判断data
                if (data==1) {
                    // 关闭弹框
                    $(".close").click();
                    // 重置表单内容
                    $("#reset").click();

                    // 清空提示信息

                    $("#passInfo").html('');
                    $("#nameInfo").html('');

                    window.location.reload();


                }else if(data){
                    // 用户名提示信息
                    var str='';
                    if (data.name) {
                        str="<div class='alert alert-danger'>"+data.name+"</div>";
                    }else{
                        str="<div class='alert alert-success'>√</div>";
                    }

                    $("#userInfo").html(str);

                    // 密码提示信息

                    if (data.pass) {
                        str="<div class='alert alert-danger'>"+data.pass+"</div>";
                    }else{
                        str="<div class='alert alert-success'>√</div>";
                    }

                    $("#passInfo").html(str);



                }else{
                    alert('添加失败');
                }
            });

        }

    </script>
@endsection