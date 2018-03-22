@extends('admin.public.admin')
@section('main')
	<!-- 内容 -->
	<div class="col-md-10">

		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
			<li><a href="#">系统管理</a></li>
			<li class="active">分类广告列表</li>

			<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>

		</ol>

		<!-- 面版 -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<button class="btn btn-danger"> 广告展示</button>
                <a href="/admin/sys/types/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加分类广告</a>
				<p class="pull-right tots" >共有 条数据</p>
				<form action="/admin/user" class="form-inline pull-right">
					<div class="form-group">
						<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
					</div>

					<input type="submit" value="搜索" class="btn btn-success">
				</form>


			</div>
			<table class="table-bordered table table-hover">
                <th><input type="checkbox" name="" id=""></th>
                <th>ID</th>
				<th>图片</th>
				<th>标题</th>
				<th>类型</th>
				<th>所属分类</th>
                <th>操作</th>

                @foreach($data as $value)
                    <tr>
                        <td><input type="checkbox" name=""></td>
                        <td>{{$value->id}}</td>
                        <td><img src="/Uploads/TypesAds/{{$value->img}}" width="200px"></td>
                        <td>{{$value->title}}</td>
                        <td>@if($value->type)
                            大图
                            @else
                                小图
                            @endif
                            </td>
                        <td>{{$value->name}}</td>
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

@endsection