<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>完成支付页面</title>
    <link rel="stylesheet" href="/style/admin/bs/css/bootstrap.css">
    <script src="/style/admin/bs/js/jquery.min.js"></script>
    <script src="/style/admin/bs/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    支付已完成
                </div>
                <div class="form-group">
                    <label for="">订单号:<?php echo e($code); ?></label>

                </div>
                <table class="table-bordered table table-hover">
                    <th><input type="checkbox" name="" ></th>
                    <th>商品名</th>
                    <th>商品封面图片</th>
                    <th>金额</th>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?php echo e($value->gname); ?></td>
                            <td>
                                <img src="/Uploads/Goods/<?php echo e($value->img); ?>" width="200px" >
                            </td>
                            <td><?php echo e($value->money); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </table>

                <a href="/"><buttton>返回首页</buttton></a>




                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>