@extends('admin.public.admin')
@section('main')

    <!-- 引入CSS -->
    <link rel="stylesheet" href="{{asset('/up/Huploadify.css')}}">
    <!-- 引入JQ -->
    <script src="{{asset('/style/admin/bs/js/jquery.min.js')}}"></script>
    <!-- 引入文件上传插件 -->
    <script src="{{asset('/up/jquery.Huploadify.js')}}"></script>
    <!-- 内容 -->
    <div class="col-md-10">

        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="#">系统管理</a></li>
            <li class="active">轮播图列表</li>

            <button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
        </ol>

        <!-- 面版 -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <button class="btn btn-danger"> 轮播图展示</button>

                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-success"><span
                            class="glyphicon glyphicon-plus"></span> 添加轮播图</a>

                <p class="pull-right tots">共有{{$tot}}条数据</p>
                <form action="/admin/user" class="form-inline pull-right">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
                    </div>

                    <input type="submit" value="搜索" class="btn btn-success">
                </form>


            </div>
            <table class="table-bordered table table-hover">
                <th>ID</th>
                <th>图片</th>
                <th>友情链接</th>
                <th>标题</th>
                <th>排序</th>
                <th>操作</th>
                @foreach($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td><img src="/Uploads/Slider/{{$value->img}}" width="200px" height="100px"></td>
                        <td>{{$value->href}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->orders}}</td>

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
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">添加轮播图</h4>
                </div>
                <div class="modal-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/admin/sys/slider" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">标题</label>
                            <input type="text" name="title" class="form-control" placeholder="请输入标题">
                        </div>
                        <div class="form-group">
                            <label for="">友情链接</label>
                            <input type="text" name="href" class="form-control" placeholder="请输入友情链接">
                        </div>
                        <div class="form-group">
                            <label for="">排序</label>
                            <input type="number" name="orders" class="form-control" placeholder="数值越大越靠前">
                        </div>

                        <div class="form-group">
                            <label for="">图片</label>

                            <div id="upload"></div>
                            <div id="main">

                            </div>
                            <input type="hidden" name="img" id="imgs">
                        </div>

                        <div class="form-group pull-right">
                            <input type="submit" value="提交"  class="btn btn-success">
                            <input type="reset" id="reset" value="重置" class="btn btn-danger">
                        </div>

                        <div style="clear:both"></div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--上传插件-->
    <script type="text/javascript">
        //上传
        $(function(){
            //声明字符串
            var imgs='';
            $('#upload').Huploadify({
                auto:true,
                fileTypeExts:'*.jpg;*.png;*.gif;*.JPG;*.PNG;*.GIF',
                multi:true,
                formData:{'_token':'{{ csrf_token()}}','dir':'Slider'},
                fileSizeLimit:9999,
                fileObjName:'files',
                showUploadedPercent:true,//是否实时显示上传的百分比，如20%
                showUploadedSize:true,
                removeTimeout:0,
                uploader:'/admin/shangchuan',
                onUploadStart:function(){
                    //alert('开始上传');
                },
                onInit:function(){
                    //alert('初始化');
                },
                onUploadComplete:function(file, data, response){
                    //alert('上传完成');

                    // 拼接图片
                    imgs="<img width='200px'  src='/Uploads/Slider/"+data+"'>";
                    // 展示图片
                    $("#main").html(imgs);
                    // // 隐藏传递数据
                    $("#imgs").val(data);
                },
                onDelete:function(file){
                    console.log('删除的文件：'+file);
                    console.log(file);
                }
            });
        });


        // ajax删除

        function deletes(obj,id){
            // 发送ajax请求

            $.post("/admin/Slider/"+id,{"_token":'{{csrf_token()}}',"_method":"delete"},function(data){
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

    </script>

@endsection