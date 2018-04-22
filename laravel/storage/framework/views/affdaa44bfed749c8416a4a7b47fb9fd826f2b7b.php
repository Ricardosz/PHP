<?php $__env->startSection('main'); ?>
	<!-- 内容 -->
	<div class="col-md-10">

		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
			<li><a href="#">订单管理</a></li>
			<li class="active">订单列表</li>

			<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
		</ol>

		<!-- 面版 -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<button class="btn btn-danger"> 订单详情</button>
				<p class="pull-right tots" >共有 条数据</p>
				<form action="/admin/user" class="form-inline pull-right">
					<div class="form-group">
						<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
					</div>

					<input type="submit" value="搜索" class="btn btn-success">
				</form>


			</div>
			<table class="table-bordered table table-hover">
				<tr>
					<td>姓名</td>
                    <td><?php echo e($data->sname); ?></td>
				</tr>
                <tr>
                    <td>电话</td>
                    <td><?php echo e($data->stel); ?></td>
                </tr>
                <tr>
                    <td>所在省市</td>
                    <td><?php echo e($data->addr); ?></td>
                </tr>
                <tr>
                    <td>详细信息</td>
                    <td><?php echo e($data->addrInfo); ?></td>
                </tr>
               

			</table>
			<!-- 分页效果 -->
			<div class="panel-footer">

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>