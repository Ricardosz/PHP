<?php $__env->startSection('main'); ?>
    <!-- 引入CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/up/Huploadify.css')); ?>">
    <!-- 引入JQ -->
    <script src="<?php echo e(asset('/style/admin/bs/js/jquery.min.js')); ?>"></script>
    <!-- 引入文件上传插件 -->
    <script src="<?php echo e(asset('/up/jquery.Huploadify.js')); ?>"></script>

    <!-- 内容 -->
    <div class="col-md-10">

        <ol class="breadcrumb">
            <li><a href="/admin"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
            <li><a href="#">商品管理</a></li>
            <li class="active">商品列表</li>
            <button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
        </ol>

        <!-- 面版 -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
                <!--  <a href="/admin/admin/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a>-->
                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加商品</a>

                <p class="pull-right tots" >共有 <span id="tot"><?php echo e($data->tot); ?></span> 条数据</p>
                <form action="" class="form-inline pull-right">
                    <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容" >
                    </div>

                    <input type="submit" value="搜索" class="btn btn-success">
                </form>


            </div>
            <table class="table-bordered table table-hover">
                <th><input type="checkbox" name="" ></th>
                <th>ID</th>
                <th>商品名</th>
                <th>商品所属分类</th>
                <th>商品封面图片</th>
                <th>商品库存</th>
                <th>操作</th>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo e($value->id); ?></td>
                        <td>
                            <a href="/admin/Sku?id=<?php echo e($value->id); ?>"> <?php echo e($value->gname); ?></a></td>
                        </td>
                        <td><?php echo e($value->cname); ?></td>
                        <td>
                            <img src="/Uploads/Goods/<?php echo e($value->img); ?>" width="200px" >
                        </td>
                        <td><?php echo e($value->num); ?></td>
                        <td>
                            <a href="#" onclick="edit(<?php echo e($value->id); ?>)" data-toggle="modal" data-target="#edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="#" onclick="deletes(this,<?php echo e($value->id); ?>)" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </table>
            <!-- 分页效果 -->
            <div class="panel-footer">
        <?php echo e($data->links()); ?>

            </div>
        </div>
    </div>
    <!-- 添加页面模态框 -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">添加商品</h4>
                </div>
                <div class="modal-body">
                    <form action="" onsubmit="return false;" id="formAdd">
                        <div class="form-group">
                            <label for="">商品名称</label>
                            <input type="text" name="name" class="form-control" placeholder="请输入商品名称">
                        </div>
                        <div class="form-group">
                            <label for="">商品所属分类</label>
                            <select name="cid"   class="form-control">
                                <option value="">请选择商品所属分类</option>
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
                            <label for="">商品封面图片</label>
                            <div id="upload"></div>
                            <div id="main">

                            </div>
                            <input type="hidden" name="img" id="imgs">
                        </div>


                        <div class="form-group pull-right">
                            <input type="submit" value="提交" onclick="add()" class="btn btn-success">
                            <input type="reset" id="reset" value="重置" class="btn btn-danger">
                        </div>

                        <div style="clear:both"></div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- 修改页面模态框 -->
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">修改商品</h4>
                </div>
                <div class="modal-body" id="body">

                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <script>

        //上传
        $(function(){
            //声明字符串
            var imgs='';
            $('#upload').Huploadify({
                auto:true,
                fileTypeExts:'*.jpg;*.png;*.gif;*.JPG;*.PNG;*.GIF',
                multi:true,
                formData:{'_token':'<?php echo e(csrf_token()); ?>','dir':'Goods'},
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

        // ajax修改数据

        function save(){
            // 表单序列化

            str=$("#formEdit").serialize();

            // 提交到下一个页面

            $.post("/admin/goods/1",{str:str,"_method":'put','_token':'<?php echo e(csrf_token()); ?>'},function(data){

                // 判断data
                if (data==1) {

                    window.location.reload();

                }else if(data){


                    // 密码提示信息

                    if (data.pass) {
                        str="<div class='alert alert-danger'>"+data.pass+"</div>";
                    }else{
                        str="<div class='alert alert-success'>√</div>";
                    }

                    $("#passInfo1").html(str);



                }else{
                    alert('添加失败');
                }
            });
        }
        // ajax修改的方法

        function edit(id){
            // 发送ajax请求
            $.get("/admin/goods/"+id+"/edit",{},function(data){

                if (data) {

                    $("#body").html(data);
                };

            });

        }


        // ajax删除

        function deletes(obj,id){
            // 发送ajax请求

            $.post("/admin/goods/"+id,{"_token":'<?php echo e(csrf_token()); ?>',"_method":"delete"},function(data){
                // 判断是否成功

                if (data==1) {
                    // 移除数据

                    $(obj).parent().parent().remove();

                    // 数量计算

                    tot=Number($("#tot").html());

                    $("#tot").html(--tot);
                }else{
                    alert('删除失败');
                }
            })
        }
        // 添加的处理操作

        function add(){
            // 表单序列化

            str=$("#formAdd").serialize();

            // 提交到下一个页面

            $.post('/admin/goods',{str:str,'_token':'<?php echo e(csrf_token()); ?>'},function(data){

              // 判断data
                if (data==1) {
                    // 关闭弹框
                    $(".close").click();
                    // 重置表单内容
                    $("#reset").click();

                    // 清空提示信息

                    $("#passInfo").html('');
                    $("#nameInfo").html('');

                    window.location.reload();


                }else if(data){
                    // 用户名提示信息
                    var str='';
                    if (data.name) {
                        str="<div class='alert alert-danger'>"+data.name+"</div>";
                    }else{
                        str="<div class='alert alert-success'>√</div>";
                    }

                    $("#userInfo").html(str);

                    // 密码提示信息

                    if (data.pass) {
                        str="<div class='alert alert-danger'>"+data.pass+"</div>";
                    }else{
                        str="<div class='alert alert-success'>√</div>";
                    }

                    $("#passInfo").html(str);

                }else{
                    alert('添加失败');
                }
            });

        }

    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>