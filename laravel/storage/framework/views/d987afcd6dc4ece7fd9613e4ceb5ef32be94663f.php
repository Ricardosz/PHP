<?php $__env->startSection('main'); ?>
    <!-- 引入CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/up/Huploadify.css')); ?>">
    <!-- 引入文件上传插件 -->
    <script src="<?php echo e(asset('/up/jquery.Huploadify.js')); ?>"></script>
    <!-- 内容 -->
    <div class="col-md-10">
        <!-- 面版 -->
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="/home/user" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="">头像</label>
                        <img src="http://q.qlogo.cn/headimg_dl?dst_uin=948573412&spec=100" />
                        <div id="upload"></div>
                        <div id="main">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">用户名</label>
                        <input type="text" name="keywords" class="form-control"  value=""  placeholder="请输入友情链接">
                    </div>
                    <div class="form-group">
                        <label for="">昵称</label>
                        <input type="text" name="description" class="form-control"  value=""  placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">QQ号</label>
                        <input type="text" name="description" class="form-control"  value=""  placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">邮箱</label>
                        <input type="text" name="description" class="form-control"  value=""  placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">性别</label>
                        <input type="radio" name="sex" > 男
                        <input type="radio" name="sex"> 女
                        <input type="radio" name="sex"> 保密
                    </div>
                    <div class="form-group">
                        <label for="">电话</label>
                        <input type="text" name="description" class="form-control"  value=""  placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="提交" >
                    </div>
                    <div style="clear:both"></div>
                </form>
            </div>
        </div>



    </div>
    <!--上传插件-->
    <script type="text/javascript">
        //上传
        $(function(){
            //声明字符串
            var imgs='';
            $('#upload').Huploadify({
                auto:true,
                fileTypeExts:'*.jpg;*.png;*.gif;*.JPG;*.PNG;*.GIF',
                multi:true,
                formData:{'_token':'<?php echo e(csrf_token()); ?>','dir':'User'},
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
                    imgs="<img width='200px'  src='/Uploads/User/"+data+"'>";
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
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.public.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>