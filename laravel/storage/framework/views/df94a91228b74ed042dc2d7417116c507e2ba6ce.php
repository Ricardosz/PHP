<form action="" onsubmit="return false;" id="formEdit">
    <div class="form-group">
        <label for="">角色显示名</label>
        <input type="text" name="display_name" class="form-control" placeholder="请输入角色组名" value="<?php echo e($data->display_name); ?>">
        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
    </div>
    <div class="form-group">
        <label for="">角色名称</label>
        <input type="text" name="name" class="form-control" placeholder="请输入角色名称" value="<?php echo e($data->name); ?>">
    </div>
    <div class="form-group">
        <label for="">用户所属访问权限组</label>
        <select name="aid"   class="form-control">
            <?php $__currentLoopData = $access; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option  value="<?php echo e($value->id); ?>" ><?php echo e($value->display_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">状态</label>
        <br>
        <?php if($data->status): ?>
        <input type="radio" name="status"  value="0">正常
        <input type="radio" name="status" checked value="1">禁用
        <?php else: ?>
        <input type="radio" name="status" checked value="0">正常
        <input type="radio" name="status" value="1">禁用
        <?php endif; ?>
    </div>
    <div class="form-group pull-right">
        <input type="submit" value="提交" onclick="save()" class="btn btn-success">
        <input type="reset" id="reset1" value="重置" class="btn btn-danger">
    </div>

    <div style="clear:both"></div>
</form>