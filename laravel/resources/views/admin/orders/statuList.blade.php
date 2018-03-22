@extends('admin.public.admin')
@section('main')
    <style>
        .queren{
            display: none;
        }
    </style>
	<!-- 内容 -->
	<div class="col-md-10">

		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
			<li><a href="#">订单管理</a></li>
			<li class="active">订单状态列表</li>

			<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
		</ol>

		<!-- 面版 -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<button class="btn btn-danger"> 订单状态展示</button>
				<p class="pull-right tots" >共有<span>{{count($data)}}</span>条数据</p>
				<form action="/admin/user" class="form-inline pull-right">
					<div class="form-group">
						<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
					</div>

					<input type="submit" value="搜索" class="btn btn-success">
				</form>


			</div>
			<table class="table-bordered table table-hover">
				<th>ID</th>
				<th>订单状态名</th>



				@foreach($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td><input type="text" value="{{$value->name}}"> <button class="btn btn-success queren" onclick="save(this,{{$value->id}})">确认</button></td>

                    </tr>
                    @endforeach

			</table>

		</div>
	</div>
    <script>
        //鼠标移动确认按钮展示
        $("input[type=text]").focus(function () {
           $(".queren").hide();
            $(this).next("button").show();
        });

        //数据修改
        function save(obj,id) {
            //获取用户输入的状态信息
            name=$(obj).prev("input").val();
            //发送Ajax请求
            $.post("/admin/orders/statu/edit",{id:id,name:name,"_token":'{{csrf_token()}}' },function (data) {
               //判断是否成功
                if(data==1)
                {
                    $(obj).hide();
                }
                else {
                    alert("更新失败");
                }
            })
        }
    </script>

@endsection