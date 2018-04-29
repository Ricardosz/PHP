<?php $__env->startSection('main'); ?>
	<!-- 内容 -->
	<div class="col-md-10">

		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
			<li><a href="#">用户管理</a></li>
			<li class="active">用户列表</li>

			<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
		</ol>

		<!-- 面版 -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<button class="btn btn-danger"> 会员展示</button>
				<p class="pull-right tots" >共有 <?php echo e($tot); ?>条数据</p>
				<form action="/admin/user" class="form-inline pull-right">
					<div class="form-group">
						<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
					</div>

					<input type="submit" value="搜索" class="btn btn-success">
				</form>


			</div>
			<table class="table-bordered table table-hover">
				<th>ID</th>
				<th>用户名</th>
				<th>电话号码</th>
				<th>邮箱</th>
				<th>注册时间</th>
				<th>状态</th>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($value->id); ?></td>
					<td><?php echo e($value->name); ?></td>
					<td><?php echo e($value->tel); ?></td>
					<td><?php echo e($value->email); ?></td>
					<td><?php echo e($value->created_time); ?></td>
                    <?php if($value->status==0): ?>
                        <td><span class="btn btn-primary">未激活</span></td>
                        <?php elseif($value->status==1): ?>
                        <td><span class="btn btn-success">激活</span></td>
                        <?php else: ?>
                        <td><span class="btn btn-danger">黑名单</span></td>
                        <?php endif; ?>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</table>
			<!-- 分页效果 -->
			<div class="panel-footer">
				<?php echo e($data->links()); ?>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>