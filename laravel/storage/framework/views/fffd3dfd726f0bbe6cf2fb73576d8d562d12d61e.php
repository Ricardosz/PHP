<form action="" onsubmit="return false;" id="formEdit">
    <div class="form-group">
        <label for="">商品名称</label>
        <input type="text" name="gname" disabled value="<?php echo e($data->gname); ?>" class="form-control">
        <input type="hidden" name="sid" value="<?php echo e($data->sid); ?>">

    </div>

    <div class="form-group">
        <label for="">属性值</label>
        <input type="text" name="value" value="<?php echo e($data->value); ?>" class="form-control" disabled>
    </div>

    <div class="form-group">
        <label for="">价格</label>
        <input type="text" name="price" value="<?php echo e($data->price); ?>" class="form-control" placeholder="请输入价格">
    </div>
    <div class="form-group">
        <label for="">库存</label>
        <input type="text" name="num" value="<?php echo e($data->num); ?>" class="form-control" placeholder="请输入库存">
    </div>




    <div class="form-group pull-right">
        <input type="submit" value="提交" onclick="save()" class="btn btn-success">
        <input type="reset" id="reset1" value="重置" class="btn btn-danger">
    </div>

    <div style="clear:both"></div>
</form>