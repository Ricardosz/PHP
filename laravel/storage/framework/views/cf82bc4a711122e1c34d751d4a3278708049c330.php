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
				<button class="btn btn-danger"> 订单状态的修改</button>
			</div>
			<div class="panel-body">
                <form action="" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="">订单号</label>
                        <input class="form-control" type="text" name="code" value="<?php echo e($_GET['code']); ?>" >
                    </div>
                    <div class="form-group">
                        <label for="">订单状态</label>
                        <select name="sid"  class="form-control" >
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($_GET['sid']==$value->id): ?>
                            <option  selected value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($value->id); ?>" ><?php echo e($value->name); ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="提交" class="btn btn-success">
                    </div>


                </form>
            </div>

			<!-- 分页效果 -->
			<div class="panel-footer">

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>