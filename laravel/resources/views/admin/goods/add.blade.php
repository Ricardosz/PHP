@extends('admin.public.admin')

@section('main')
    <!-- 引入CSS -->
    <link rel="stylesheet" href="{{asset('/up/Huploadify.css')}}">
    <!-- 引入JQ -->
    <script src="{{asset('/style/admin/bs/js/jquery.min.js')}}"></script>
    <!-- 引入文件上传插件 -->
    <script src="{{asset('/up/jquery.Huploadify.js')}}"></script>

    <!--引入百度富文本编辑器-->
    <script src="{{asset('/UEditor/ueditor.config.js')}}"></script>
    <script src="{{asset('/UEditor/ueditor.all.min.js')}}"></script>


<!-- 内容 -->
<div class="col-md-10">

	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">商品管理</a></li>
		<li class="active">添加商品</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="index.html" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 商品页面</a>
			<a href="" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加商品</a>
		</div>

		<div class="panel-body">
			<form action="/admin/goods" method="post">
					{{csrf_field()}}
				<div class="form-group">
					<label for="">商品名</label>
					<input type="text" name="title" class="form-control"  placeholder="请输入商品名">
				</div>
				<div class="form-group">
					<label for="">商品简介</label>
					<textarea name="info"  placeholder="请输入商品简介" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="">商品所属分类</label>
					<select name="cid"   class="form-control">
						<option value="">请选择商品分类</option>
                        @foreach($data as $value)
                            @if($value->size==2)
                                <option value="{{$value->id}}">{{$value->html}}</option>
                                @else
                                <option  value="{{$value->id}}" disabled>{{$value->html}}</option>
                                @endif
                            @endforeach()
					</select>
				</div>
				<div class="form-group">
					<label for="">商品价格</label>
					<input type="text" name="price" class="form-control"  placeholder="请输入商品价格">
				</div>
                <div class="form-group">
                    <label for="">商品库存</label>
                    <input type="text" name="num" class="form-control"  placeholder="请输入商品库存">
                </div>

                <div class="form-group">
                    <label for="">商品封面图片</label>
                    <div id="upload"></div>
                    <div id="main">

                    </div>
                    <input type="hidden" name="img" id="imgs">
                </div>


                <div class="form-group">
                    <label for="">商品多图片</label>
                    <div id="upload1"></div>
                    <div id="main1">

                    </div>
                    <input type="hidden" name="imgs" id="imgs1">
                </div>


                <div class="form-group">
                    <label for="">商品简介</label>
                    <script id="editor" type="text/plain" name="text"></script>

                </div>

                <div class="form-group">
                    <label for="">商品配置信息</label>
                    <script id="editor1" type="text/plain" name="config"></script>

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
            var ue = UE.getEditor('editor');
            var ue1 = UE.getEditor('editor1');


            //声明字符串
            var imgs='';
            $('#upload').Huploadify({
                auto:true,
                fileTypeExts:'*.jpg;*.png;*.gif;*.JPG;*.PNG;*.GIF',
                multi:true,
                formData:{'_token':'{{ csrf_token()}}','dir':'Goods'},
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
                    imgs="<img width='200px'  src='/Uploads/Goods/"+data+"'>";
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

        //多图片上传
        $(function(){
            //声明字符串
            var imgs1='';
            var arr=[];
            $('#upload1').Huploadify({
                auto:true,
                fileTypeExts:'*.jpg;*.png;*.gif;*.JPG;*.PNG;*.GIF',
                multi:true,
                formData:{'_token':'{{ csrf_token()}}','dir':'Goods'},
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
                    imgs1+="<img width='200px'  src='/Uploads/Goods/"+data+"'>";
                    arr.push(data);
                    // 展示图片
                    $("#main1").html(imgs1);
                    // // 隐藏传递数据
                    $("#imgs1").val(arr.join(','));
                },
                onDelete:function(file){
                    console.log('删除的文件：'+file);
                    console.log(file);
                }
            });
        });

</script>


@endsection