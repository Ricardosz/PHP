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
			<li><a href="/admin"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
			<li><a href="#">系统管理</a></li>
			<li class="active">系统配置列表</li>

			<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
		</ol>

		<!-- 面版 -->
		<div class="panel panel-default">
            <div class="panel-body">
			<form action="/admin/sys/config" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label for="">标题</label>
					<input type="text" name="title" value="{{config('web.title')}}" class="form-control" placeholder="请输入标题">
				</div>
				<div class="form-group">
					<label for="">关键字</label>
					<input type="text" name="keywords" class="form-control"  value="{{config('web.keywords')}}"  placeholder="请输入友情链接">
				</div>
				<div class="form-group">
					<label for="">描述</label>
					<input type="text" name="description" class="form-control"  value="{{config('web.description')}}"  placeholder="数值越大越靠前">
				</div>
				<div class="form-group">
					<label for="">统计</label>
					<textarea name="baidu" class="form-control" cols="30" rows="2">{{config('web.baidu')}}</textarea>
				</div>

                <div class="form-group">
                    <label for="">Logo</label>

                    <div id="upload"></div>
                    <div id="main">
                        <img src="/Uploads/Sys/{{config('web.logo')}}" width="200px" >

                    </div>

                  <input type="hidden" name="logo" id="imgs" value="{{config('web.logo')}}">
                    <input type="hidden" name="oldLogo"  value="{{config('web.logo')}}">
                </div>

				<div class="form-group pull-right">
					<input type="submit" value="提交"  class="btn btn-success">
					<input type="reset" id="reset" value="重置" class="btn btn-danger">
				</div>

				<div style="clear:both"></div>
			</form>
	</div>
        </div>

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
                    formData:{'_token':'{{ csrf_token()}}','dir':'Sys'},
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
                        imgs="<img width='200px'  src='/Uploads/Sys/"+data+"'>";
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
        </script>

@endsection