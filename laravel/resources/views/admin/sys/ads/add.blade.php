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
		<li class="active">广告添加</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="index.html" class="btn btn-danger">广告页面</a>
			<a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加广告</a>
		</div>

		<div class="panel-body">
			<form action="/admin/sys/ads" method="post">
				{{csrf_field()}}


				<div class="form-group">
					<label for="">标题</label>
					<input type="text" name="title" class="form-control" id="" placeholder="请输入标题">
				</div>
				<div class="form-group">
					<label for="">广告跳转地址</label>
					<input type="text" name="href" class="form-control" id="" placeholder="请输入广告跳转地址">
				</div>
				<div class="form-group">
					<label for="">排序</label>
					<input type="text" name="sort" class="form-control" id="" placeholder="数值越大越靠前">
				</div>
                <div class="form-group">
                    <label for="">图片</label>

                    <div id="upload"></div>
                    <div id="main">

                    </div>
                    <input type="hidden" name="img" id="imgs">
                </div>

				<div class="form-group">
					<input type="submit" value="提交" class="btn btn-success">
					<input type="reset" value="重置" class="btn btn-danger">
				</div>

			</form>
		</div>
		
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
                formData:{'_token':'{{csrf_token()}}','dir':'Ads'},
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
                    imgs="<img width='200px'  src='/Uploads/Ads/"+data+"'>";
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