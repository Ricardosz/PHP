
<form action="" onsubmit="return false;" id="formEdit">
    <div class="form-group">
        <label for="">商品名称</label>
        <input type="text" name="gname"  value="<?php echo e($data->gname); ?>" class="form-control" placeholder="请输入商品名称">
        <input type="hidden" name="gid" value="<?php echo e($data->gid); ?>">
    </div>
    <div class="form-group">
        <label for="">商品所属分类</label>
        <select name="cid"   class="form-control">
            <option value=""><?php echo e($data->cname); ?></option>
            <?php $__currentLoopData = $data->type_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($val->size==2): ?>
                    <option value="<?php echo e($val->id); ?>"><?php echo e($val->html); ?></option>
                <?php else: ?>
                    <option  value="<?php echo e($val->id); ?>" disabled><?php echo e($val->html); ?></option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">总库存</label>
        <input type="text" name="num" value="<?php echo e($data->num); ?>" class="form-control" disabled>
    </div>

    <div class="form-group pull-right">
        <input type="submit" value="提交" onclick="save()" class="btn btn-success">
        <input type="reset" id="reset1" value="重置" class="btn btn-danger">
    </div>

    <div style="clear:both"></div>
</form>
