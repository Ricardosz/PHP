<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo e(config('web.title')); ?></title>
    <meta name="keywords" content="<?php echo e(config('web.keywords')); ?>"/>
    <meta name="description" content="<?php echo e(config('web.description')); ?>"/>
    <link rel="shortcut icon" href="/style/home/img/1.png">
    <link rel="stylesheet" href="/style/home/css/lenovo.css">
    <script src="/style/home/js/jquery.js"></script>
    <script src="/style/home/js/index.js"></script>
</head>
<body>
<!-- 头 -->
<?php echo $__env->make("home.public.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- 中 -->
<!-- <div class="middle">
 <!-- 搜索 -->
<div class="container search">
    <div class="search-left">
        <a href="http://shuaizai.com"><img src="/Uploads/Sys/<?php echo e(config('web.logo')); ?>" alt="" width="200px"></a>
    </div>
    <div class="search-right">
        <div class="fang">
            <span class="da" ></span>
        </div>
        <input type="text" placeholder="miix5">
    </div>
    <div class="clear"></div>
</div>



<!-- 菜单 -->
<div class="container menus">

   
</div>
<!-- 监听 -->
<div class="jianting">
    <ul>
    </ul>
</div>
<!-- 侧边栏 -->
<div class="cebianlang">
    <ul>
        <li class="ccbl"><span class="dianhua"></span>
            <div class="xianshi">
                <dl class="clearfix">
                    <dt class="pc"></dt>
                    <dd>
                        <a href="javascript:;">商城服务热线<br>
                            4000-888-222</a>
                    </dd>
                    <dt class="tk"></dt>
                    <dd>
                        <a href="javascript:;">商城服务热线<br>4000-888-222</a>
                    </dd>
                    <dt class="shouji"></dt>
                    <dd>
                        <a href="javascript:;">手机频道服务热线<br>
                            400-818-8818</a>
                    </dd>
                    <dt class="xiuli"></dt>
                    <dd>
                        <a href="javascript:;">服务产品购买热线<br>
                            400-890-1566</a>
                    </dd>
                    <dt class="dianlian"></dt>
                    <dd>
                        <a href="javascript:;">联想商用客户热线<br>
                            400-813-6161</a>
                    </dd>
                    <dt class="ka"></dt>
                    <dd>
                        <a href="javascript:;">通信卡服务热线<br>
                            400-641-0041</a>
                    </dd>
                </dl>
            </div>
        </li>
        <li><span class="wechat"></span></li>
        <li><span class="home"></span></li>
        <li><span class="qianbi"></span></li>
    </ul>
    <div class="huidao">
        <span class="dingbu"></span>
    </div>

</div>
<!-- 轮播区 -->
<div class="container carouse">
    <div class="left">
        <ul>
            <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <!--左侧菜单-->
                <div class="left-menu">
                    <a href="/types/<?php echo e($one->id); ?>"><?php echo e($one->name); ?>

                        <span class="list_usepng list_icona"></span>
                    </a>
                    <!-- 详细内容 -->
                    <div class="left-xiang">
                        <!-- 总说 -->
                        <div class="left-zong">
                            <!-- 分说 字-->
                            <?php $__currentLoopData = $one->zi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $two): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="left-zi">
                                <p><a href="/types/<?php echo e($two->id); ?>"><?php echo e($two->name); ?></a></p>
                                <ul class="clearfix">
                                    <?php $__currentLoopData = $two->zi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $three): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="/types/<?php echo e($three->id); ?>"><?php echo e($three->name); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <!-- 右侧广告 -->
                        <div class="left-tu">
                           <?php $__currentLoopData = $one->rightAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rightAds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="">
                              <img class="classification_img" title="<?php echo e($rightAds->title); ?>" src="/Uploads/TypesAds/<?php echo e($rightAds->img); ?>">
                            </a>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="center" >

        <ul class='imgs'>
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key==0): ?>
                    <li class='active'><img src="/Uploads/Slider/<?php echo e($value->img); ?>" alt="" width="1000px" height="300px"></li>
                <?php else: ?>
                    <li><img src="/Uploads/Slider/<?php echo e($value->img); ?>" alt=""></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <ul class='nums'>
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key==0): ?>
                        <li class='active'>
                        </li>
                    <?php else: ?>
                        <li></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </ul>
        <a href="javascript:;" class="btn btn-left"></a>
        <a href="javascript:;" class="btn btn-right"></a>
    </div>


</div>
<!-- 图片 -->
<div class="container middle-erbo">
    <div class="bao">
        <div class="tui">
            <img src="/style/home/img/70.jpg" alt="">
        </div>
        <div class="boo">
            <ul class="bo-1">
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a target="_blank" href="">
                    <img src="/Uploads/Ads/<?php echo e($value->img); ?>" alt="">
                        </a>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <a href="javascript:;" class="btn btn-left"></a>
            <a href="javascript:;" class="btn btn-right"></a>
        </div>
    </div>
</div>
<!-- 明星单品 -->
<div class="container star">
    <div class="star-1">
        <h3><span><img src="/style/home/img/555.png" alt="" dispaly="none"></span>明星单品</h3>
        <div class="start-xi">
            <ul>
                <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="width: 198px; height: 297px;">
                    <a target="_blank" href="/goods/<?php echo e($good->gid); ?>/">
                        <img title="<?php echo e($good->title); ?>" src="/Uploads/Goods/<?php echo e($good->img); ?>" width="198px">
                    </a>
                    <p class="star_name">
                        <a target="_blank" title="<?php echo e($good->title); ?>" href="/goods/<?php echo e($good->gid); ?>"><?php echo e($good->title); ?></a>
                    </p>
                    <p class="star_ad">
                        <a target="_blank" href="/goods/<?php echo e($good->id); ?>" title="<?php echo e($good->title); ?>"><?php echo e($good->info); ?></a>
                    </p>
                    <p class="star_price"><a target="_blank" href="" title="<?php echo e($good->title); ?>"><?php echo e(number_format($good->price)); ?>元</a></p>
                </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class='clear'></div>
            </ul>
        </div>
    </div>
</div>
<!-- 猜你喜欢 -->
<!-- <div class="like"></div> -->

<!-- 楼层 -->
<div class="ceng">
    <div class='container lou '>
        <!-- 1F联想 -->
        <?php
        $louNum=0;
        ?>
        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($lou->is_lou): ?>
                <?php
                $louNum++;
                ?>
        <div class="lenovo">
            <div class="title">
                <h3><span><?php echo e($louNum); ?>F</span><em><?php echo e($lou->name); ?></em></h3>
                <div class="jieshao">
                    <?php $__currentLoopData = $lou->zi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a target="_blank" href="" title="<?php echo e($zi->name); ?>"><?php echo e($zi->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <a href="" target="_blank" title="" class="myicon floor_more">更多</a>
                </div>
            </div>
            <div class="rong">
                <div class="zuo">
                   <a target="_blank" href=""> <img title="<?php echo e($lou->leftAds->title); ?>" width="240" height="535" src="/Uploads/TypesAds/<?php echo e($lou->leftAds->img); ?>">
                    </a>
                </div>
                <div class="you">
                    <?php $__currentLoopData = $lou->goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $louGoods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="you1 good">
                        <a target="_blank" href="/goods/<?php echo e($louGoods->gid); ?>/<?php echo e($louGoods->id); ?>" title="<?php echo e($louGoods->title); ?>">
                            <img width="164" height="164" src="/Uploads/Goods/<?php echo e($louGoods->img); ?>" title="<?php echo e($louGoods->title); ?>">
                        </a>
                        <a class="good-jie" target="_blank" href="/goods/<?php echo e($louGoods->gid); ?>/<?php echo e($louGoods->id); ?>" title="<?php echo e($louGoods->title); ?>"><?php echo e($louGoods->title); ?>

                        </a>
                        <a class="good-jie1" target="_blank" href="/goods/<?php echo e($louGoods->gid); ?>/<?php echo e($louGoods->id); ?>">
                           <?php echo e($louGoods->title); ?>"><?php echo e($louGoods->info); ?>

                        </a>
                        <a class="money" target="_blank" href="/goods/<?php echo e($louGoods->gid); ?>/<?php echo e($louGoods->id); ?>" title="<?php echo e($louGoods->title); ?>"><?php echo e(number_format($louGoods->price)); ?>元
                        </a>
                        <span class="good-biao"></span>
                    </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
            <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- 6F社交平台 -->
        <div class="container social">
            <div class="title">
                <h3><span><?php echo e(++$louNum); ?>F</span> 社交平台</h3>

            </div>
            <div class="social-tu">
                <ul>
                    <li>
                        <div class="shekuang" datatype="5" sort="1" b_i="190,212,30">
                            <a target="_blank" href="">
                                <img width="190" height="212" src="/style/home/img/50.jpg" class="lazy_img"></a>
                            <div class="social-tou"></div>
                            <div class="social-rong">
                                <em class="social-zi" ></em>
                                <span>联想社区</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="shekuang" datatype="5" sort="2" b_i="190,212,30">
                            <a target="_blank" href="http://955.cc/muj82">
                                <img width="190" height="212" src="/style/home/img/52.jpg" class="lazy_img"></a>
                            <div class="social-tou"></div>
                            <div class="social-rong">
                                <em class="social-guanwei"></em>
                                <span>官方微信</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="shekuang" datatype="5" sort="3" b_i="190,212,30">
                            <a target="_blank" href="">
                                <img width="190" height="212" src="/style/home/img/53.jpg" class="lazy_img"></a>
                            <div class="social-tou"></div>
                            <div class="social-rong">
                                <em class="social-weifu"></em>
                                <span>微信服务</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="shekuang" datatype="5" sort="4" b_i="190,212,30">
                            <a target="_blank" href="">
                                <img width="190" height="212" src="/style/home/img/54.jpg" class="lazy_img"></a>
                            <div class="social-tou"></div>
                            <div class="social-rong">
                                <em class="social-batie"></em>
                                <span>百度贴吧</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="shekuang" datatype="5" sort="5" b_i="190,212,30">
                            <a target="_blank" href="">
                                <img width="190" height="212" src="/style/home/img/55.jpg" class="lazy_img"></a>
                            <div class="social-tou"></div>
                            <div class="social-rong">
                                <em class="social-gaungwei"></em>
                                <span>官方微博</span>
                            </div>
                        </div>
                    </li>
                    <li style="margin-right:0px;">
                        <div class="shekuang" datatype="5" sort="6" b_i="190,212,30">
                            <a target="_blank" href="" >
                                <img width="190" height="212" src="/style/home/img/56.jpg" class="lazy_img"></a>
                            <div class="social-tou"></div>
                            <div class="social-rong">
                                <em class="social-xinqu" ></em>
                                <span>兴趣部落</span>
                            </div>
                        </div>
                    </li>
                    <div class="clear"><div>
                </ul>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
</div>
</div>

<?php echo $__env->make("home.public.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>

