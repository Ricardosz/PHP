<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo e(config('web.title')); ?></title>
    <meta name="keywords" content="<?php echo e(config('web.keywords')); ?>"/>
    <meta name="description" content="<?php echo e(config('web.description')); ?>"/>
    <link rel="shortcut icon" href="/style/home/img/1.png">
    <link rel="stylesheet" href="/style/home/css/123.css">
    <script src="/style/home/js/jquery.js"></script>
    <script src="/style/home/js/fenglei.js"></script>
</head>
<body>
<!--引入头部-->
<?php echo $__env->make("home.public.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container menus">








<div class="container search_main clearfix search_tab" style="display: block;">
    <div class=" search_left">
        <!-- nav start -->
        <div class="search_nav">
            <div class="search_nav_con">
                <h1 style="cursor: pointer;">搜索分类</h1>
                <ul class="search_nav_category tab_title">
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($type->id==$top): ?>
                            <li class="tab_btn active" tag="154">
                        <?php else: ?>
                            <li class="tab_btn " tag="154">
                                <?php endif; ?>
                                <a href="" class="search_nav_link" latag="latag_pc_search_navcon_Lenovo笔记本">
                      <span class="searchicon"
                            style="background-image: url(http://pic.shop.lenovo.com.cn/g1/M00/00/EC/CmBZD1Yx1NmAY67bAAAEZji0Hxg556.png)">
                      </span>
                                    <span class="search_nav_txt"><?php echo e($type->name); ?></span>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <!-- nav end -->
        <div class="box-lt">

        </div>
    </div>
    <div class="search_right">
        <div class="search_result">
            <div class="search_result_left">搜索内容：
                <span class="searchKeyRed" style="display: none;">
                <em class="globalSearchKey"></em>
                <i class="del"></i>
                </span>
            </div>
            <div class="search_result_right">共
                <span id="searchProCount" class="searchResultCountColor searchCount">130</span>款产品
            </div>
        </div>
        <div class="tab_body" style="">
            <div class="le_sel tab_list" tag="154" style="display: block;">
                <ul>
                    <!-- <li class="clearfix le_sel_line1" style="">
                    <div class="xl">已选条件：</div>
                    <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a>
                    </div>
                    </li> -->
                    <li class="clearfix">
                        <div class="xl" data-name="系列" data-type="239">系列：</div>
                        <div class="fxl"><a href="javascript:;" latag="latag_pc_search_result_系列_011405"
                                            class="le_clickone le_clickmore le_clickprice" data-name="小新系列"
                                            data-value="011405"> <span class="searchicon"></span> <em>小新系列</em> </a> <a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011407,01140311"
                                    class="le_clickone le_clickmore le_clickprice" data-name="拯救者系列"
                                    data-value="011407,01140311"> <span class="searchicon"></span> <em>拯救者系列</em> </a>
                            <a href="javascript:;" latag="latag_pc_search_result_系列_011410"
                               class="le_clickone le_clickmore le_clickprice" data-name="天逸系列" data-value="011410">
                                <span class="searchicon"></span> <em>天逸系列</em> </a> <a href="javascript:;"
                                                                                       latag="latag_pc_search_result_系列_012101"
                                                                                       class="le_clickone le_clickmore le_clickprice"
                                                                                       data-name="YOGA系列"
                                                                                       data-value="012101"> <span
                                        class="searchicon"></span> <em>YOGA系列</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_012102"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="FLEX系列"
                                                                                           data-value="012102"> <span
                                        class="searchicon"></span> <em>FLEX系列</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_011413"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="710S系列"
                                                                                           data-value="011413"> <span
                                        class="searchicon"> </span> <em>710S系列</em> </a> <a href="javascript:;"
                                                                                            latag="latag_pc_search_result_系列_011418"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="310S系列"
                                                                                            data-value="011418"> <span
                                        class="searchicon"></span> <em>310S系列</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_011415"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="300S系列"
                                                                                           data-value="011415"> <span
                                        class="searchicon"> </span> <em>300S系列</em> </a> <a href="javascript:;"
                                                                                            latag="latag_pc_search_result_系列_011411"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="100S系列"
                                                                                            data-value="011411"> <span
                                        class="searchicon"> </span> <em>100S系列</em> </a> <a href="javascript:;"
                                                                                            latag="latag_pc_search_result_系列_011421"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="510系列"
                                                                                            data-value="011421"> <span
                                        class="searchicon"></span> <em>510系列</em> </a> <a href="javascript:;"
                                                                                          latag="latag_pc_search_result_系列_011417"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="500系列"
                                                                                          data-value="011417"> <span
                                        class="searchicon"> </span><em>500系列</em> </a> <a href="javascript:;"
                                                                                          latag="latag_pc_search_result_系列_011422"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="310系列"
                                                                                          data-value="011422"> <span
                                        class="searchicon"> </span> <em>310系列</em> </a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_系列_011416"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="300系列"
                                                                                          data-value="011416"> <span
                                        class="searchicon"></span><em>300系列</em> </a> <a href="javascript:;"
                                                                                         latag="latag_pc_search_result_系列_011419"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="110系列"
                                                                                         data-value="011419"> <span
                                        class="searchicon"> </span> <em>110系列</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_011404"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="S41系列"
                                                                                           data-value="011404"> <span
                                        class="searchicon"> </span> <em>S41系列</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_0114020"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="U41系列"
                                                                                           data-value="0114020"> <span
                                        class="searchicon"> </span><em>U41系列</em> </a>
                            <div class="xlb">
                                <!--  <input type="button" class="hb" latag="latag_pc_search_result_系列_more_cancel" value="取消">
                                 <input type="button" class="hh" latag="latag_pc_search_result_系列_more_confirm" value="确定">  -->
                            </div>
                        </div>
                        <div class="le_sel_con3">
                            <a href="javascript:;" latag="latag_pc_search_result_系列_more" class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="价格" data-type="240">价格：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_价格_0-1999"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="1999元以下"
                                                    data-value="0-1999"> <span
                                        class="searchicon"> </span><em>1999元以下</em></a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_价格_2000-2999"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="2000-2999元"
                                                                                           data-value="2000-2999"> <span
                                        class="searchicon"> </span> <em>2000-2999元</em> </a> <a href="javascript:;"
                                                                                                latag="latag_pc_search_result_价格_3000-3999"
                                                                                                class="le_clickone le_clickmore le_clickprice"
                                                                                                data-name="3000-3999元"
                                                                                                data-value="3000-3999">
                                <span class="searchicon"> </span> <em>3000-3999元</em> </a> <a href="javascript:;"
                                                                                              latag="latag_pc_search_result_价格_4000-4999"
                                                                                              class="le_clickone le_clickmore le_clickprice"
                                                                                              data-name="4000-4999元"
                                                                                              data-value="4000-4999">
                                <span class="searchicon"> </span> <em>4000-4999元</em></a> <a href="javascript:;"
                                                                                             latag="latag_pc_search_result_价格_5000-6999"
                                                                                             class="le_clickone le_clickmore le_clickprice"
                                                                                             data-name="5000-6999元"
                                                                                             data-value="5000-6999"><span
                                        class="searchicon"> </span> <em>5000-6999元</em> </a> <a href="javascript:;"
                                                                                                latag="latag_pc_search_result_价格_7000-9999"
                                                                                                class="le_clickone le_clickmore le_clickprice"
                                                                                                data-name="7000-9999元"
                                                                                                data-value="7000-9999">
                                <span class="searchicon"> </span><em>7000-9999元</em> </a> <a href="javascript:;"
                                                                                             latag="latag_pc_search_result_价格_10000"
                                                                                             class="le_clickone le_clickmore le_clickprice"
                                                                                             data-name="10000以上"
                                                                                             data-value="10000"> <span
                                        class="searchicon"> </span> <em>10000以上</em></a>
                            <label>
                                <input type="text" class="le_low" display="none" width="20px">
                                <span> </span>
                                <input type="text" class="le_high"> <input type="button" value="确定"
                                                                           class="hh le_input_btn"> <span
                                        class="errorMsg"></span> </label>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="CPU型号" data-type="241">CPU型号：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_CPU型号_i3-3240T,i3-4030U,i3-4005U,i3-4170,i3-4170T,i3-4012Y,i3-5005U,I3-6100U,i3-6100U,I3-5005U（P）"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="intel i3"
                                                    data-value="i3-3240T,i3-4030U,i3-4005U,i3-4170,i3-4170T,i3-4012Y,i3-5005U,I3-6100U,i3-6100U,I3-5005U（P）">
                                <span class="searchicon"></span> <em>intel i3</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_CPU型号_i5-4210H,i5-4210U,i5-4258U,i5-5200U,i5-4460T,i5-4590,i5-4288U,i5-6600K,i5-6200U,i5-6300HQ,i5-6200U,i5-5200U,i5-6267U,I5-6200U,I5-5200U,I5-6300HQ,I5-6267U,I5-6260U,i5-7200U,i5-6260U"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="intel i5"
                                                                                           data-value="i5-4210H,i5-4210U,i5-4258U,i5-5200U,i5-4460T,i5-4590,i5-4288U,i5-6600K,i5-6200U,i5-6300HQ,i5-6200U,i5-5200U,i5-6267U,I5-6200U,I5-5200U,I5-6300HQ,I5-6267U,I5-6260U,i5-7200U,i5-6260U">
                                <span class="searchicon"> </span> <em>intel i5</em> </a> <a href="javascript:;"
                                                                                            latag="latag_pc_search_result_CPU型号_i7-4558U,i7-4720HQ,i7-5500U,i7-5557U,i7-6500U,I7-6700HQ,i7-6700K,i7-4790,i7-4710MQ,i7-6700HQ,i7-5557U,i7-4510U,i7-6700HQ,i7-6500U,i7-4720HQ,i7-6560U,i7-5557U,i7-5500U,i7-6567U,I7-6700HQ,I7-6500U,I7-4720HQ,I7-6560U,I7-5557U,I7-5500U,I7-6567U,I7-7500U,i7-7500U"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="intel i7"
                                                                                            data-value="i7-4558U,i7-4720HQ,i7-5500U,i7-5557U,i7-6500U,I7-6700HQ,i7-6700K,i7-4790,i7-4710MQ,i7-6700HQ,i7-5557U,i7-4510U,i7-6700HQ,i7-6500U,i7-4720HQ,i7-6560U,i7-5557U,i7-5500U,i7-6567U,I7-6700HQ,I7-6500U,I7-4720HQ,I7-6560U,I7-5557U,I7-5500U,I7-6567U,I7-7500U,i7-7500U">
                                <span class="searchicon"></span> <em>intel i7</em> </a> <a href="javascript:;"
                                                                                           latag="latag_pc_search_result_CPU型号_5Y71,5Y10c,6Y30,6Y54,G1820,G1820T,G3260T,2957U,奔腾3805U,N3540,N2940,G3250T,G3260,J2900,3805U,N3700,5Y71,6Y54,6Y30,5Y10C,N3150,N3060,N3160,4405Y,6Y75,M3-7Y30"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="intel 其它"
                                                                                           data-value="5Y71,5Y10c,6Y30,6Y54,G1820,G1820T,G3260T,2957U,奔腾3805U,N3540,N2940,G3250T,G3260,J2900,3805U,N3700,5Y71,6Y54,6Y30,5Y10C,N3150,N3060,N3160,4405Y,6Y75,M3-7Y30"><span
                                        class="searchicon"></span><em>intel 其它</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_CPU型号_A9-9410,A12-9700P,FX-7500,A4-7210,E1-7010,A10-7800,A4-7210,A10-8700P,A10-8700P"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="AMD"
                                                                                          data-value="A9-9410,A12-9700P,FX-7500,A4-7210,E1-7010,A10-7800,A4-7210,A10-8700P,A10-8700P">
                                <span class="searchicon"></span> <em>AMD</em> </a>
                            <div class="xlb">
                                <!--  <input type="button" class="hb" latag="latag_pc_search_result_CPU型号_more_cancel" value="取消"> <input type="button" class="hh" latag="latag_pc_search_result_CPU型号_more_confirm" value="确定"> </div> -->
                            </div>
                            <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_CPU型号_more"
                                                        class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="内存容量" data-type="242">内存容量：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_内存容量_4GB,4G"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="4G"
                                                    data-value="4GB,4G"><span
                                        class="searchicon"></span><em>4G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_内存容量_8GB,8G,8G"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="8G"
                                                                                    data-value="8GB,8G,8G"><span
                                        class="searchicon"></span><em>8G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_内存容量_16GB,16G"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="16G"
                                                                                    data-value="16GB,16G"><span
                                        class="searchicon"></span><em>16G</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_内存容量_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_内存容量_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_内存容量_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="硬盘容量" data-type="243">硬盘容量：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_硬盘容量_500GB + 128G SSD,500GB,500G Hybrid硬盘（内置8G SSD高速缓存）,500GB"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="500G"
                                                    data-value="500GB + 128G SSD,500GB,500G Hybrid硬盘（内置8G SSD高速缓存）,500GB"><span
                                        class="searchicon"></span><em>500G</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_硬盘容量_1TB+512G PCIE SSD*2 支持双SSD RAID 0,1TB ,1TB + 128G SSD,1TB,1TB HDD+128G SSD,1TB+256G SSD,1TB+512G SSD"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="1TB"
                                                                                      data-value="1TB+512G PCIE SSD*2 支持双SSD RAID 0,1TB ,1TB + 128G SSD,1TB,1TB HDD+128G SSD,1TB+256G SSD,1TB+512G SSD"><span
                                        class="searchicon"></span><em>1TB</em></a><a href="javascript:;"
                                                                                     latag="latag_pc_search_result_硬盘容量_500GB + 128G SSD,128G SSD极速固态硬盘,1TB + 128G SSD,128G SSD,1TB HDD+128G SSD"
                                                                                     class="le_clickone le_clickmore le_clickprice"
                                                                                     data-name="含128G SSD"
                                                                                     data-value="500GB + 128G SSD,128G SSD极速固态硬盘,1TB + 128G SSD,128G SSD,1TB HDD+128G SSD"><span
                                        class="searchicon"></span><em>含128G SSD</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_硬盘容量_256G SSD极速固态硬盘,256G SSD高速固态硬盘,256G SSD,256GB PCIE SSD 固态硬盘,1TB+256G SSD,256G SSD 极速固态硬盘,256G SSD 高速固态硬盘"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="含256G SSD"
                                                                                           data-value="256G SSD极速固态硬盘,256G SSD高速固态硬盘,256G SSD,256GB PCIE SSD 固态硬盘,1TB+256G SSD,256G SSD 极速固态硬盘,256G SSD 高速固态硬盘"><span
                                        class="searchicon"></span><em>含256G SSD</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_硬盘容量_1TB+512G PCIE SSD*2 支持双SSD RAID 0,512G SSD极速固态硬盘,512G SSD高速固态硬盘,512G SSD,512G PCIE SSD 固态硬盘,1TB+512G SSD,512G SSD 极速固态硬盘"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="含512G SSD"
                                                                                           data-value="1TB+512G PCIE SSD*2 支持双SSD RAID 0,512G SSD极速固态硬盘,512G SSD高速固态硬盘,512G SSD,512G PCIE SSD 固态硬盘,1TB+512G SSD,512G SSD 极速固态硬盘"><span
                                        class="searchicon"></span><em>含512G SSD</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_硬盘容量_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_硬盘容量_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_硬盘容量_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="操作系统" data-type="319">操作系统：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_操作系统_Windows 10 家庭版,Windows 10专业版,Windows® 10 专业版,Windows10"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="Windows 10"
                                                    data-value="Windows 10 家庭版,Windows 10专业版,Windows® 10 专业版,Windows10"><span
                                        class="searchicon"></span><em>Windows 10</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_操作系统_Windows 8.1,Windows 8 中文版,Windows 8"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="Windows 8"
                                                                                            data-value="Windows 8.1,Windows 8 中文版,Windows 8"><span
                                        class="searchicon"></span><em>Windows 8</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_操作系统_DOS"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="其它"
                                                                                           data-value="DOS"><span
                                        class="searchicon"></span><em>其它</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_操作系统_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_操作系统_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_操作系统_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="屏幕尺寸" data-type="244">屏幕尺寸：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_11.6英寸"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="11.6英寸"
                                                    data-value="11.6英寸"><span class="searchicon"></span><em>11.6英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_12.2英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="12.2英寸"
                                    data-value="12.2英寸"><span class="searchicon"></span><em>12.2英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_12.5英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="12.5英寸"
                                    data-value="12.5英寸"><span class="searchicon"></span><em>12.5英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_13.3英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="13.3英寸"
                                    data-value="13.3英寸"><span class="searchicon"></span><em>13.3英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_13.9英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="13.9英寸"
                                    data-value="13.9英寸"><span class="searchicon"></span><em>13.9英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_14英寸,14.0英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="14英寸"
                                    data-value="14英寸,14.0英寸"><span class="searchicon"></span><em>14英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_15.6英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="15.6英寸"
                                    data-value="15.6英寸"><span class="searchicon"></span><em>15.6英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_17.3英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="17.3英寸"
                                    data-value="17.3英寸"><span class="searchicon"></span><em>17.3英寸</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_屏幕尺寸_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_屏幕尺寸_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="物理分辨率" data-type="245">物理分辨率：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_物理分辨率_1920*1080P,1920*1080,1920×1080,1920x1080,1920X1080,1920x1200,1920X1080P"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="全高清屏（1920×1080）"
                                                    data-value="1920*1080P,1920*1080,1920×1080,1920x1080,1920X1080,1920x1200,1920X1080P"><span
                                        class="searchicon"></span><em>全高清屏（1920×1080）</em></a><a href="javascript:;"
                                                                                                 latag="latag_pc_search_result_物理分辨率_1366X768,1366*768,1366*768,1366×768,1366x768,1366X768"
                                                                                                 class="le_clickone le_clickmore le_clickprice"
                                                                                                 data-name="普通屏（1366×768）"
                                                                                                 data-value="1366X768,1366*768,1366*768,1366×768,1366x768,1366X768"><span
                                        class="searchicon"></span><em>普通屏（1366×768）</em></a><a href="javascript:;"
                                                                                               latag="latag_pc_search_result_物理分辨率_2560*1440,2560*1600,3840*2160,2560×1440,2560×1600,3840×2160,3840x2160,3200x1800,2160x1440,2560*1440,2560*1600,3840*2160,2560×1440,2560×1600,3840×2160,3840x2160,3200x1800,2160x1440"
                                                                                               class="le_clickone le_clickmore le_clickprice"
                                                                                               data-name="超高清屏（2K/3k/4k）"
                                                                                               data-value="2560*1440,2560*1600,3840*2160,2560×1440,2560×1600,3840×2160,3840x2160,3200x1800,2160x1440,2560*1440,2560*1600,3840*2160,2560×1440,2560×1600,3840×2160,3840x2160,3200x1800,2160x1440"><span
                                        class="searchicon"></span><em>超高清屏（2K/3k/4k）</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_物理分辨率_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_物理分辨率_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_物理分辨率_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="适用场景" data-type="246">适用场景：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_适用场景_校园学生"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="校园学生"
                                                    data-value="校园学生"><span
                                        class="searchicon"></span><em>校园学生</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_时尚女生"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="时尚女生"
                                                                                      data-value="时尚女生"><span
                                        class="searchicon"></span><em>时尚女生</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_家庭娱乐"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="家庭娱乐"
                                                                                      data-value="家庭娱乐"><span
                                        class="searchicon"></span><em>家庭娱乐</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_商务办公"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="商务办公"
                                                                                      data-value="商务办公"><span
                                        class="searchicon"></span><em>商务办公</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_高清游戏"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="高清游戏"
                                                                                      data-value="高清游戏"><span
                                        class="searchicon"></span><em>高清游戏</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_轻薄便携"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="轻薄便携"
                                                                                      data-value="轻薄便携"><span
                                        class="searchicon"></span><em>轻薄便携</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_适用场景_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_适用场景_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_适用场景_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
                <a href="javascript:;" class="le_sel_down show"><span>更多选项</span><em class="useicon"></em></a><a
                        href="javascript:;" class="le_sel_up"><span>收起</span><em class="useicon"></em></a></div>
            <div class="le_sel tab_list" tag="155" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="系列" data-type="247">系列：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_系列_021902"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="X系列"
                                                    data-value="021902"><span class="searchicon"></span><em>X系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_021905"
                                    class="le_clickone le_clickmore le_clickprice" data-name="T系列"
                                    data-value="021905"><span class="searchicon"></span><em>T系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_021904"
                                    class="le_clickone le_clickmore le_clickprice" data-name="E系列"
                                    data-value="021904"><span class="searchicon"></span><em>E系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_021910"
                                    class="le_clickone le_clickmore le_clickprice" data-name="X1系列" data-value="021910"><span
                                        class="searchicon"></span><em>X1系列</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_021908"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="S系列"
                                                                                      data-value="021908"><span
                                        class="searchicon"></span><em>S系列</em></a><a href="javascript:;"
                                                                                     latag="latag_pc_search_result_系列_021909"
                                                                                     class="le_clickone le_clickmore le_clickprice"
                                                                                     data-name="P系列"
                                                                                     data-value="021909"><span
                                        class="searchicon"></span><em>P系列</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_系列_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_系列_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_系列_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="价格" data-type="248">价格：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_价格_0-3999"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="3999元以下"
                                                    data-value="0-3999"><span class="searchicon"></span><em>3999元以下</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_4000-5999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="4000-5999元"
                                    data-value="4000-5999"><span class="searchicon"></span><em>4000-5999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_6000-7999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="6000-7999元"
                                    data-value="6000-7999"><span class="searchicon"></span><em>6000-7999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_8000-9999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="8000-9999元"
                                    data-value="8000-9999"><span class="searchicon"></span><em>8000-9999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_10000-12999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="10000-12999元"
                                    data-value="10000-12999"><span class="searchicon"></span><em>10000-12999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_13000-15999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="13000-15999元"
                                    data-value="13000-15999"><span class="searchicon"></span><em>13000-15999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_16000-19999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="16000-19999元"
                                    data-value="16000-19999"><span class="searchicon"></span><em>16000-19999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_20000"
                                    class="le_clickone le_clickmore le_clickprice" data-name="20000元以上"
                                    data-value="20000"><span class="searchicon"></span><em>20000元以上</em></a><label>
                                <input type="text" class="le_low"><span></span>
                                </span></label>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="内存容量" data-type="250">内存容量：</div>
                        <div class="le_sel_con2">
                            <a href="javascript:;" latag="latag_pc_search_result_内存容量_4GB"
                               class="le_clickone le_clickmore le_clickprice" data-name="4G" data-value="4GB"><span
                                        class="searchicon"></span><em>4G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_内存容量_8GB"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="8G"
                                                                                    data-value="8GB"><span
                                        class="searchicon"></span><em>8G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_内存容量_16GB"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="16G"
                                                                                    data-value="16GB"><span
                                        class="searchicon"></span><em>16G</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_内存容量_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_内存容量_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_内存容量_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="硬盘类型" data-type="251">硬盘类型：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_硬盘类型_混合硬盘"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="混合硬盘"
                                                    data-value="混合硬盘"><span
                                        class="searchicon"></span><em>混合硬盘</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_硬盘类型_机械硬盘"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="机械硬盘"
                                                                                      data-value="机械硬盘"><span
                                        class="searchicon"></span><em>机械硬盘</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_硬盘类型_固态硬盘"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="固态硬盘"
                                                                                      data-value="固态硬盘"><span
                                        class="searchicon"></span><em>固态硬盘</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_硬盘类型_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_硬盘类型_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_硬盘类型_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="屏幕尺寸" data-type="252">屏幕尺寸：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_12.5英寸"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="12.5英寸"
                                                    data-value="12.5英寸"><span class="searchicon"></span><em>12.5英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_13英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="13英寸"
                                    data-value="13英寸"><span class="searchicon"></span><em>13英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_14英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="14英寸"
                                    data-value="14英寸"><span class="searchicon"></span><em>14英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_15英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="15英寸"
                                    data-value="15英寸"><span class="searchicon"></span><em>15英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_15.6英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="15.6英寸"
                                    data-value="15.6英寸"><span class="searchicon"></span><em>15.6英寸</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_屏幕尺寸_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_屏幕尺寸_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="CPU类型" data-type="317">CPU类型：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_CPU类型_i5"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="intel i5"
                                                    data-value="i5"><span class="searchicon"></span><em>intel
                                    i5</em></a><a href="javascript:;" latag="latag_pc_search_result_CPU类型_i7"
                                                  class="le_clickone le_clickmore le_clickprice" data-name="intel i7"
                                                  data-value="i7"><span class="searchicon"></span><em>intel i7</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_CPU类型_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_CPU类型_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_CPU类型_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="物理分辨率" data-type="253">物理分辨率：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_物理分辨率_1920x1080"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="全高清屏（1920×1080）" data-value="1920x1080"><span
                                        class="searchicon"></span><em>全高清屏（1920×1080）</em></a><a href="javascript:;"
                                                                                                 latag="latag_pc_search_result_物理分辨率_1366x768"
                                                                                                 class="le_clickone le_clickmore le_clickprice"
                                                                                                 data-name="普通屏（1366×768）"
                                                                                                 data-value="1366x768"><span
                                        class="searchicon"></span><em>普通屏（1366×768）</em></a><a href="javascript:;"
                                                                                               latag="latag_pc_search_result_物理分辨率_1600x900"
                                                                                               class="le_clickone le_clickmore le_clickprice"
                                                                                               data-name="高分屏（1600×900）"
                                                                                               data-value="1600x900"><span
                                        class="searchicon"></span><em>高分屏（1600×900）</em></a><a href="javascript:;"
                                                                                               latag="latag_pc_search_result_物理分辨率_2560x1440,2560x1600,3840x2160"
                                                                                               class="le_clickone le_clickmore le_clickprice"
                                                                                               data-name="超高清屏（2K/3k/4k）"
                                                                                               data-value="2560x1440,2560x1600,3840x2160"><span
                                        class="searchicon"></span><em>超高清屏（2K/3k/4k）</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_物理分辨率_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_物理分辨率_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_物理分辨率_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="适用场景" data-type="254">适用场景：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_适用场景_商务办公"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="商务办公"
                                                    data-value="商务办公"><span
                                        class="searchicon"></span><em>商务办公</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_轻薄便携"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="轻薄便携"
                                                                                      data-value="轻薄便携"><span
                                        class="searchicon"></span><em>轻薄便携</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_校园学生"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="校园学生"
                                                                                      data-value="校园学生"><span
                                        class="searchicon"></span><em>校园学生</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_家庭影音"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="家庭影音"
                                                                                      data-value="家庭影音"><span
                                        class="searchicon"></span><em>家庭影音</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_高性能独显"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="高性能独显"
                                                                                      data-value="高性能独显"><span
                                        class="searchicon"></span><em>高性能独显</em></a><a href="javascript:;"
                                                                                       latag="latag_pc_search_result_适用场景_个性化订制"
                                                                                       class="le_clickone le_clickmore le_clickprice"
                                                                                       data-name="个性化订制"
                                                                                       data-value="个性化订制"><span
                                        class="searchicon"></span><em>个性化订制</em></a><a href="javascript:;"
                                                                                       latag="latag_pc_search_result_适用场景_变形笔记本"
                                                                                       class="le_clickone le_clickmore le_clickprice"
                                                                                       data-name="变形笔记本"
                                                                                       data-value="变形笔记本"><span
                                        class="searchicon"></span><em>变形笔记本</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_适用场景_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_适用场景_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_适用场景_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
                <a href="javascript:;" class="le_sel_down show"><span>更多选项</span><em class="useicon"></em></a><a
                        href="javascript:;" class="le_sel_up"><span>收起</span><em class="useicon"></em></a></div>
            <div class="le_sel tab_list" tag="156" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="系列" data-type="256">系列：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_系列_011311"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="Y系列"
                                                    data-value="011311"><span class="searchicon"></span><em>Y系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011625"
                                    class="le_clickone le_clickmore le_clickprice" data-name="AIO 910系列"
                                    data-value="011625"><span class="searchicon"></span><em>AIO 910系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011620"
                                    class="le_clickone le_clickmore le_clickprice" data-name="AIO 700系列"
                                    data-value="011620"><span class="searchicon"></span><em>AIO 700系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011627"
                                    class="le_clickone le_clickmore le_clickprice" data-name="AIO 510系列"
                                    data-value="011627"><span class="searchicon"></span><em>AIO 510系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011624"
                                    class="le_clickone le_clickmore le_clickprice" data-name="AIO 510S系列"
                                    data-value="011624"><span class="searchicon"></span><em>AIO 510S系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011623"
                                    class="le_clickone le_clickmore le_clickprice" data-name="AIO 300系列"
                                    data-value="011623"><span class="searchicon"></span><em>AIO 300系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011312"
                                    class="le_clickone le_clickmore le_clickprice" data-name="天逸50系列"
                                    data-value="011312"><span class="searchicon"></span><em>天逸50系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011301"
                                    class="le_clickone le_clickmore le_clickprice" data-name="家悦H系列"
                                    data-value="011301"><span class="searchicon"></span><em>家悦H系列</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_系列_011315"
                                    class="le_clickone le_clickmore le_clickprice" data-name="家悦50" data-value="011315"><span
                                        class="searchicon"></span><em>家悦50</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011314"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="家悦30"
                                                                                      data-value="011314"><span
                                        class="searchicon"></span><em>家悦30</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011307"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="Erazer 异能者系列"
                                                                                      data-value="011307"><span
                                        class="searchicon"></span><em>Erazer 异能者系列</em></a><a href="javascript:;"
                                                                                              latag="latag_pc_search_result_系列_011309"
                                                                                              class="le_clickone le_clickmore le_clickprice"
                                                                                              data-name="未来先锋 K 系列"
                                                                                              data-value="011309"><span
                                        class="searchicon"></span><em>未来先锋 K 系列</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_011606"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="C4系列"
                                                                                           data-value="011606"><span
                                        class="searchicon"></span><em>C4系列</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011608"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="C5系列"
                                                                                      data-value="011608"><span
                                        class="searchicon"></span><em>C5系列</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011617"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="C2系列"
                                                                                      data-value="011617"><span
                                        class="searchicon"></span><em>C2系列</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011316"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="D系列"
                                                                                      data-value="011316"><span
                                        class="searchicon"></span><em>D系列</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_系列_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_系列_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_系列_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="价格" data-type="260">价格：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_价格_0-1999"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="1999元以下"
                                                    data-value="0-1999"><span class="searchicon"></span><em>1999元以下</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_2000-2999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="2000-2999元"
                                    data-value="2000-2999"><span class="searchicon"></span><em>2000-2999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_3000-3999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="3000-3999元"
                                    data-value="3000-3999"><span class="searchicon"></span><em>3000-3999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_4000-4999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="4000-4999元"
                                    data-value="4000-4999"><span class="searchicon"></span><em>4000-4999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_5000-6999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="5000-6999元"
                                    data-value="5000-6999"><span class="searchicon"></span><em>5000-6999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_7000-9999"
                                    class="le_clickone le_clickmore le_clickprice" data-name="7000-9999元"
                                    data-value="7000-9999"><span class="searchicon"></span><em>7000-9999元</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_价格_10000"
                                    class="le_clickone le_clickmore le_clickprice" data-name="10000以上"
                                    data-value="10000"><span class="searchicon"></span><em>10000以上</em></a><label><input
                                        type="text" class="le_low"><span></span><input type="text"
                                                                                       class="le_high"><input
                                        type="button" value="确定" class="hh le_input_btn"><span class="errorMsg"></span></label>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="电脑类型" data-type="320">电脑类型：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_电脑类型_0113,0101"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="台式分体机"
                                                    data-value="0113,0101"><span
                                        class="searchicon"></span><em>台式分体机</em></a><a href="javascript:;"
                                                                                       latag="latag_pc_search_result_电脑类型_0116"
                                                                                       class="le_clickone le_clickmore le_clickprice"
                                                                                       data-name="台式一体机"
                                                                                       data-value="0116"><span
                                        class="searchicon"></span><em>台式一体机</em></a><a href="javascript:;"
                                                                                       latag="latag_pc_search_result_电脑类型_012002"
                                                                                       class="le_clickone le_clickmore le_clickprice"
                                                                                       data-name="显示器"
                                                                                       data-value="012002"><span
                                        class="searchicon"></span><em>显示器</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_电脑类型_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_电脑类型_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_电脑类型_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="CPU型号" data-type="257">CPU型号：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_CPU型号_I3 6100T,i3-3240T,i3-4030U,i3-4005U,i3-4170,i3-4170T,i3-4012Y,i3-5005U,I3-5005U,I3-6100U,i3-4170T,i3-6100T,i3-4170,i3-6100,i3-5005U,I3-4170T,I3-6100T,I3-4170,I3-6100,I3-5005U"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="intel i3"
                                                    data-value="I3 6100T,i3-3240T,i3-4030U,i3-4005U,i3-4170,i3-4170T,i3-4012Y,i3-5005U,I3-5005U,I3-6100U,i3-4170T,i3-6100T,i3-4170,i3-6100,i3-5005U,I3-4170T,I3-6100T,I3-4170,I3-6100,I3-5005U"><span
                                        class="searchicon"></span><em>intel i3</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_CPU型号_I5-6400T,i5-4210H,i5-4210U,i5-4258U,i5-5200U,i5-4460T,i5-4590,i5-4288U,i5-6600K,i5-6200U,i5-6300HQ,I5-6200U,I5-5200U,I5-6300HQ,I5-6267U,i5-6400,i5-6400T,i5-4460T,i5-4460,i5-6200U,i5-5200U,i5-6600K,i5-4590,I5-4590,I5-6400,I5-6400T,I5-4460T,I5-4460,I5-6200U,I5-5200U,I5-6600K"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="intel i5"
                                                                                          data-value="I5-6400T,i5-4210H,i5-4210U,i5-4258U,i5-5200U,i5-4460T,i5-4590,i5-4288U,i5-6600K,i5-6200U,i5-6300HQ,I5-6200U,I5-5200U,I5-6300HQ,I5-6267U,i5-6400,i5-6400T,i5-4460T,i5-4460,i5-6200U,i5-5200U,i5-6600K,i5-4590,I5-4590,I5-6400,I5-6400T,I5-4460T,I5-4460,I5-6200U,I5-5200U,I5-6600K"><span
                                        class="searchicon"></span><em>intel i5</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_CPU型号_i7-4558U,i7-4720HQ,i7-5500U,i7-5557U,i7-6500U,I7-6700HQ,i7-6700K,i7-4790,i7-4710MQ,i7-6700HQ,I7-6700HQ,I7-6500U,I7-4720HQ,I7-6560U,I7-5557U,I7-5500U,I7-6567U,i7-6500U,i7-6700T,i7-4790,i7-6700K,i7-6700,i7-4790,I7-6500U,I7-6700T,I7-4790,I7-6700K,I7-6700,I7-4790"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="intel i7"
                                                                                          data-value="i7-4558U,i7-4720HQ,i7-5500U,i7-5557U,i7-6500U,I7-6700HQ,i7-6700K,i7-4790,i7-4710MQ,i7-6700HQ,I7-6700HQ,I7-6500U,I7-4720HQ,I7-6560U,I7-5557U,I7-5500U,I7-6567U,i7-6500U,i7-6700T,i7-4790,i7-6700K,i7-6700,i7-4790,I7-6500U,I7-6700T,I7-4790,I7-6700K,I7-6700,I7-4790"><span
                                        class="searchicon"></span><em>intel i7</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_CPU型号_5Y71,5Y10c,6Y30,6Y54,G1820,G1820T,G3260T,2957U,奔腾3805U,N3540,N2940,G3250T,G3260,J2900,3805U,N3700,G1840,G1840T,G3260,G3260T,G4400,G4400T,G3900,3805U,N3700,G3900T"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="intel 其它"
                                                                                          data-value="5Y71,5Y10c,6Y30,6Y54,G1820,G1820T,G3260T,2957U,奔腾3805U,N3540,N2940,G3250T,G3260,J2900,3805U,N3700,G1840,G1840T,G3260,G3260T,G4400,G4400T,G3900,3805U,N3700,G3900T"><span
                                        class="searchicon"></span><em>intel 其它</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_CPU型号_A8-7600,E2_7110,FX-7500,A4-7210,E1-7010,A10-7800,E1-7010,AX2-450,A4-7210,A6-7310,A6-7400K,A8-7600,A10-7800,A10-8750,A8-7410,A9-9410,A6-9210"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="AMD"
                                                                                          data-value="A8-7600,E2_7110,FX-7500,A4-7210,E1-7010,A10-7800,E1-7010,AX2-450,A4-7210,A6-7310,A6-7400K,A8-7600,A10-7800,A10-8750,A8-7410,A9-9410,A6-9210"><span
                                        class="searchicon"></span><em>AMD</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_CPU型号_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_CPU型号_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_CPU型号_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="内存容量" data-type="316">内存容量：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_内存容量_4G,DDR3,4GB,4G DDRIII"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="4G"
                                                    data-value="4G,DDR3,4GB,4G DDRIII"><span
                                        class="searchicon"></span><em>4G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_内存容量_8G DDR4,8G DDR3,8G,8GB"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="8G"
                                                                                    data-value="8G DDR4,8G DDR3,8G,8GB"><span
                                        class="searchicon"></span><em>8G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_内存容量_16G DDR4,16G,16GB"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="16G"
                                                                                    data-value="16G DDR4,16G,16GB"><span
                                        class="searchicon"></span><em>16G</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_内存容量_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_内存容量_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_内存容量_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="显卡类型" data-type="259">显卡类型：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_显卡类型_独立显卡"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="独立显卡"
                                                    data-value="独立显卡"><span
                                        class="searchicon"></span><em>独立显卡</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_显卡类型_集成显卡"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="集成显卡"
                                                                                      data-value="集成显卡"><span
                                        class="searchicon"></span><em>集成显卡</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_显卡类型_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_显卡类型_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_显卡类型_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="操作系统" data-type="324">操作系统：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_操作系统_Windows 10 家庭版,Windows 10专业版,Windows® 10 专业版,Windows10"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="Windows 10"
                                                    data-value="Windows 10 家庭版,Windows 10专业版,Windows® 10 专业版,Windows10"><span
                                        class="searchicon"></span><em>Windows 10</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_操作系统_Windows 7 家庭版,Windows 7 家庭普通版,Windows 7"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="Windows 7"
                                                                                            data-value="Windows 7 家庭版,Windows 7 家庭普通版,Windows 7"><span
                                        class="searchicon"></span><em>Windows 7</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_操作系统_DOS"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="其它"
                                                                                           data-value="DOS"><span
                                        class="searchicon"></span><em>其它</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_操作系统_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_操作系统_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_操作系统_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="屏幕尺寸" data-type="258">屏幕尺寸：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_20英寸"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="20英寸"
                                                    data-value="20英寸"><span
                                        class="searchicon"></span><em>20英寸</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_屏幕尺寸_21.5英寸"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="21.5英寸"
                                                                                      data-value="21.5英寸"><span
                                        class="searchicon"></span><em>21.5英寸</em></a><a href="javascript:;"
                                                                                        latag="latag_pc_search_result_屏幕尺寸_23宽屏LED显示器,23英寸,23.0英寸"
                                                                                        class="le_clickone le_clickmore le_clickprice"
                                                                                        data-name="23英寸"
                                                                                        data-value="23宽屏LED显示器,23英寸,23.0英寸"><span
                                        class="searchicon"></span><em>23英寸</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_屏幕尺寸_23.8英寸"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="23.8英寸"
                                                                                      data-value="23.8英寸"><span
                                        class="searchicon"></span><em>23.8英寸</em></a><a href="javascript:;"
                                                                                        latag="latag_pc_search_result_屏幕尺寸_27英寸"
                                                                                        class="le_clickone le_clickmore le_clickprice"
                                                                                        data-name="27英寸"
                                                                                        data-value="27英寸"><span
                                        class="searchicon"></span><em>27英寸</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_屏幕尺寸_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_屏幕尺寸_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="适用场景" data-type="322">适用场景：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_适用场景_金榜题名"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="金榜题名"
                                                    data-value="金榜题名"><span
                                        class="searchicon"></span><em>金榜题名</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_疯狂游戏"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="疯狂游戏"
                                                                                      data-value="疯狂游戏"><span
                                        class="searchicon"></span><em>疯狂游戏</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_致美大屏"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="致美大屏"
                                                                                      data-value="致美大屏"><span
                                        class="searchicon"></span><em>致美大屏</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_家庭娱乐"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="家庭娱乐"
                                                                                      data-value="家庭娱乐"><span
                                        class="searchicon"></span><em>家庭娱乐</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_商务办公"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="商务办公"
                                                                                      data-value="商务办公"><span
                                        class="searchicon"></span><em>商务办公</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_适用场景_随心触控"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="随心触控"
                                                                                      data-value="随心触控"><span
                                        class="searchicon"></span><em>随心触控</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_适用场景_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_适用场景_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_适用场景_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
                <a href="javascript:;" class="le_sel_down show"><span>更多选项</span><em class="useicon"></em></a><a
                        href="javascript:;" class="le_sel_up"><span>收起</span><em class="useicon"></em></a></div>
            <div class="le_sel tab_list" tag="140" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="类型" data-type="1060">类型：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_类型_020502"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="分体台式电脑"
                                                    data-value="020502"><span class="searchicon"></span><em>分体台式电脑</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_类型_020501"
                                    class="le_clickone le_clickmore le_clickprice" data-name="一体台式电脑"
                                    data-value="020501"><span class="searchicon"></span><em>一体台式电脑</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_类型_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_类型_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_类型_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
            </div>
            <div class="le_sel tab_list" tag="158" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="系列" data-type="267">系列：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_系列_011519,011520,011521,011523,011525"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="MIIX二合一笔记本"
                                                    data-value="011519,011520,011521,011523,011525"><span
                                        class="searchicon"></span><em>MIIX二合一笔记本</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_系列_011522"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="YOGA BOOK"
                                                                                            data-value="011522"><span
                                        class="searchicon"></span><em>YOGA BOOK</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_系列_011517"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="YOGA平板3"
                                                                                           data-value="011517"><span
                                        class="searchicon"></span><em>YOGA平板3</em></a><a href="javascript:;"
                                                                                         latag="latag_pc_search_result_系列_011514"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="YOGA平板2"
                                                                                         data-value="011514"><span
                                        class="searchicon"></span><em>YOGA平板2</em></a><a href="javascript:;"
                                                                                         latag="latag_pc_search_result_系列_011504"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="轻薄平板"
                                                                                         data-value="011504"><span
                                        class="searchicon"></span><em>轻薄平板</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011505"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="传统平板"
                                                                                      data-value="011505"><span
                                        class="searchicon"></span><em>传统平板</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011518"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="教育平板"
                                                                                      data-value="011518"><span
                                        class="searchicon"></span><em>教育平板</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_系列_011516"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="PHAB平板手机"
                                                                                      data-value="011516"><span
                                        class="searchicon"></span><em>PHAB平板手机</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_系列_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_系列_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_系列_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="价格" data-type="268">价格：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_价格_0-799"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="0-799元"
                                                    data-value="0-799"><span
                                        class="searchicon"></span><em>0-799元</em></a><a href="javascript:;"
                                                                                        latag="latag_pc_search_result_价格_800-1099"
                                                                                        class="le_clickone le_clickmore le_clickprice"
                                                                                        data-name="800-1099元"
                                                                                        data-value="800-1099"><span
                                        class="searchicon"></span><em>800-1099元</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_价格_1100-1499"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="1100-1499元"
                                                                                           data-value="1100-1499"><span
                                        class="searchicon"></span><em>1100-1499元</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_价格_1500-1999"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="1500-1999元"
                                                                                            data-value="1500-1999"><span
                                        class="searchicon"></span><em>1500-1999元</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_价格_2000-3499"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="2000-3499元"
                                                                                            data-value="2000-3499"><span
                                        class="searchicon"></span><em>2000-3499元</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_价格_3500"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="3500元以上"
                                                                                            data-value="3500"><span
                                        class="searchicon"></span><em>3500元以上</em></a><label><input type="text"
                                                                                                    class="le_low"><span></span><input
                                        type="text" class="le_high"><input type="button" value="确定"
                                                                           class="hh le_input_btn"><span
                                        class="errorMsg"></span></label></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="屏幕尺寸" data-type="327">屏幕尺寸：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_屏幕尺寸_6.8英寸,7英寸,6.98英寸"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="7英寸"
                                                    data-value="6.8英寸,7英寸,6.98英寸"><span class="searchicon"></span><em>7英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_8英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="8英寸"
                                    data-value="8英寸"><span class="searchicon"></span><em>8英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_10英寸,10.1英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="10.1英寸"
                                    data-value="10英寸,10.1英寸"><span class="searchicon"></span><em>10.1英寸</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_12英寸,12.2英寸"
                                    class="le_clickone le_clickmore le_clickprice" data-name="12英寸"
                                    data-value="12英寸,12.2英寸"><span class="searchicon"></span><em>12英寸</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_屏幕尺寸_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_屏幕尺寸_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_屏幕尺寸_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="存储容量" data-type="269">存储容量：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_存储容量_8G+256GB,8GB,8G,8GB DDR4+256GB PCIe SSD,8GB DDR4+512GB PCIe SSD,256GB"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="8G"
                                                    data-value="8G+256GB,8GB,8G,8GB DDR4+256GB PCIe SSD,8GB DDR4+512GB PCIe SSD,256GB"><span
                                        class="searchicon"></span><em>8G</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_存储容量_16GB,16GB ROM,16G,16GB存储"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="16G"
                                                                                    data-value="16GB,16GB ROM,16G,16GB存储"><span
                                        class="searchicon"></span><em>16G</em></a><a href="javascript:;"
                                                                                     latag="latag_pc_search_result_存储容量_32GB存储,32GB eMMC,32G,32GB"
                                                                                     class="le_clickone le_clickmore le_clickprice"
                                                                                     data-name="32G"
                                                                                     data-value="32GB存储,32GB eMMC,32G,32GB"><span
                                        class="searchicon"></span><em>32G</em></a><a href="javascript:;"
                                                                                     latag="latag_pc_search_result_存储容量_64GB,4GB+64GB,2GB+64GB"
                                                                                     class="le_clickone le_clickmore le_clickprice"
                                                                                     data-name="64G"
                                                                                     data-value="64GB,4GB+64GB,2GB+64GB"><span
                                        class="searchicon"></span><em>64G</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_存储容量_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_存储容量_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_存储容量_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="操作系统" data-type="270">操作系统：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_操作系统_Android 4.4操作系统,安卓5.1,Android 6.0,Android 6.1,Android 5.1,Android™6.0,Android系统,Android 5.0"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="Android"
                                                    data-value="Android 4.4操作系统,安卓5.1,Android 6.0,Android 6.1,Android 5.1,Android™6.0,Android系统,Android 5.0"><span
                                        class="searchicon"></span><em>Android</em></a><a href="javascript:;"
                                                                                         latag="latag_pc_search_result_操作系统_Windows 8.1,Windows 10,Windows 10 家庭版,Windows 10家庭版,Windows版"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="Windows"
                                                                                         data-value="Windows 8.1,Windows 10,Windows 10 家庭版,Windows 10家庭版,Windows版"><span
                                        class="searchicon"></span><em>Windows</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_操作系统_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_操作系统_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_操作系统_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="功能配置" data-type="271">功能配置：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_功能配置_通话"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="通话"
                                                    data-value="通话"><span class="searchicon"></span><em>通话</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_功能配置_投影"
                                    class="le_clickone le_clickmore le_clickprice" data-name="投影" data-value="投影"><span
                                        class="searchicon"></span><em>投影</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_功能配置_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_功能配置_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_功能配置_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
                <a href="javascript:;" class="le_sel_down show"><span>更多选项</span><em class="useicon"></em></a><a
                        href="javascript:;" class="le_sel_up"><span>收起</span><em class="useicon"></em></a></div>
            <div class="le_sel tab_list" tag="141" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                </ul>
            </div>
            <div class="le_sel tab_list" tag="238" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="类型" data-type="1044">类型：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_类型_014110001"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="单功能打印机"
                                                    data-value="014110001"><span
                                        class="searchicon"></span><em>单功能打印机</em></a><a href="javascript:;"
                                                                                        latag="latag_pc_search_result_类型_014110002"
                                                                                        class="le_clickone le_clickmore le_clickprice"
                                                                                        data-name="多功能一体机"
                                                                                        data-value="014110002"><span
                                        class="searchicon"></span><em>多功能一体机</em></a><a href="javascript:;"
                                                                                        latag="latag_pc_search_result_类型_014110003"
                                                                                        class="le_clickone le_clickmore le_clickprice"
                                                                                        data-name="耗材"
                                                                                        data-value="014110003"><span
                                        class="searchicon"></span><em>耗材</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_类型_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_类型_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_类型_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
            </div>
            <div class="le_sel tab_list" tag="160" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="电脑配件" data-type="272">电脑配件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_电脑配件_01520101"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="鼠标"
                                                    data-value="01520101"><span
                                        class="searchicon"></span><em>鼠标</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_电脑配件_01520102"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="键盘"
                                                                                    data-value="01520102"><span
                                        class="searchicon"></span><em>键盘</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_电脑配件_01520103"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="电脑包"
                                                                                    data-value="01520103"><span
                                        class="searchicon"></span><em>电脑包</em></a><a href="javascript:;"
                                                                                     latag="latag_pc_search_result_电脑配件_01520104"
                                                                                     class="le_clickone le_clickmore le_clickprice"
                                                                                     data-name="清洁套装"
                                                                                     data-value="01520104"><span
                                        class="searchicon"></span><em>清洁套装</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_电脑配件_01520105"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="线材"
                                                                                      data-value="01520105"><span
                                        class="searchicon"></span><em>线材</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_电脑配件_01520107"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="光驱"
                                                                                    data-value="01520107"><span
                                        class="searchicon"></span><em>光驱</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_电脑配件_01520108,022107"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="ThinkVision显示器"
                                                                                    data-value="01520108,022107"><span
                                        class="searchicon"></span><em>ThinkVision显示器</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_电脑配件_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_电脑配件_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_电脑配件_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="手机配件" data-type="273">手机配件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_手机配件_01520201"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="移动电源"
                                                    data-value="01520201"><span class="searchicon"></span><em>移动电源</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_手机配件_01520204"
                                    class="le_clickone le_clickmore le_clickprice" data-name="蓝牙耳机"
                                    data-value="01520204"><span class="searchicon"></span><em>蓝牙耳机</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_手机配件_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_手机配件_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_手机配件_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="智能设备" data-type="274">智能设备：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_智能设备_01520303"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="智能插座"
                                                    data-value="01520303"><span class="searchicon"></span><em>智能插座</em></a><a
                                    href="javascript:;" latag="latag_pc_search_result_智能设备_01520304"
                                    class="le_clickone le_clickmore le_clickprice" data-name="联想看家宝"
                                    data-value="01520304"><span class="searchicon"></span><em>联想看家宝</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_智能设备_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_智能设备_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_智能设备_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="移动存储" data-type="1035">移动存储：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_移动存储_01520401"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="U盘"
                                                    data-value="01520401"><span
                                        class="searchicon"></span><em>U盘</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_移动存储_01520402"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="移动硬盘"
                                                                                    data-value="01520402"><span
                                        class="searchicon"></span><em>移动硬盘</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_移动存储_01520403"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="SSD固态硬盘"
                                                                                      data-value="01520403"><span
                                        class="searchicon"></span><em>SSD固态硬盘</em></a><a href="javascript:;"
                                                                                         latag="latag_pc_search_result_移动存储_01520404"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="存储卡"
                                                                                         data-value="01520404"><span
                                        class="searchicon"></span><em>存储卡</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_移动存储_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_移动存储_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_移动存储_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="影音娱乐" data-type="1038">影音娱乐：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_影音娱乐_01520501"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="耳机"
                                                    data-value="01520501"><span
                                        class="searchicon"></span><em>耳机</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_影音娱乐_01520502"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="耳麦"
                                                                                    data-value="01520502"><span
                                        class="searchicon"></span><em>耳麦</em></a><a href="javascript:;"
                                                                                    latag="latag_pc_search_result_影音娱乐_01520503"
                                                                                    class="le_clickone le_clickmore le_clickprice"
                                                                                    data-name="K歌宝"
                                                                                    data-value="01520503"><span
                                        class="searchicon"></span><em>K歌宝</em></a><a href="javascript:;"
                                                                                     latag="latag_pc_search_result_影音娱乐_01520504"
                                                                                     class="le_clickone le_clickmore le_clickprice"
                                                                                     data-name="音箱音响"
                                                                                     data-value="01520504"><span
                                        class="searchicon"></span><em>音箱音响</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_影音娱乐_01520506"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="录音笔"
                                                                                      data-value="01520506"><span
                                        class="searchicon"></span><em>录音笔</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_影音娱乐_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_影音娱乐_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_影音娱乐_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="Thinklife" data-type="1041">Thinklife：</div>
                        <div class="le_sel_con2"><a href="javascript:;"
                                                    latag="latag_pc_search_result_Thinklife_Thinker必备"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="Thinker必备"
                                                    data-value="Thinker必备"><span
                                        class="searchicon"></span><em>Thinker必备</em></a><a href="javascript:;"
                                                                                           latag="latag_pc_search_result_Thinklife_商旅出行"
                                                                                           class="le_clickone le_clickmore le_clickprice"
                                                                                           data-name="商旅出行"
                                                                                           data-value="商旅出行"><span
                                        class="searchicon"></span><em>商旅出行</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_Thinklife_跨界良品"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="跨界良品"
                                                                                      data-value="跨界良品"><span
                                        class="searchicon"></span><em>跨界良品</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_Thinklife_小黑家族"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="小黑家族"
                                                                                      data-value="小黑家族"><span
                                        class="searchicon"></span><em>小黑家族</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_Thinklife_高效办公"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="高效办公"
                                                                                      data-value="高效办公"><span
                                        class="searchicon"></span><em>高效办公</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_Thinklife_more_cancel"
                                                    value="取消"><input type="button" class="hh"
                                                                      latag="latag_pc_search_result_Thinklife_more_confirm"
                                                                      value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_Thinklife_more"
                                                    class="dx">多选</a></div>
                    </li>
                </ul>
                <a href="javascript:;" class="le_sel_down show"><span>更多选项</span><em class="useicon"></em></a><a
                        href="javascript:;" class="le_sel_up"><span>收起</span><em class="useicon"></em></a></div>
            <div class="le_sel tab_list" tag="161" style="display: none;">
                <ul>
                    <li class="clearfix le_sel_line1" style="display: none;">
                        <div class="xl">已选条件：</div>
                        <div class="le_sel_con2"><a href="javascript:;" class="le_allcancel">全部撤销</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="延长保修" data-type="328">延长保修：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_延长保修_04010101"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="Lenovo笔记本延长保修" data-value="04010101"><span
                                        class="searchicon"></span><em>Lenovo笔记本延长保修</em></a><a href="javascript:;"
                                                                                               latag="latag_pc_search_result_延长保修_04010102"
                                                                                               class="le_clickone le_clickmore le_clickprice"
                                                                                               data-name="Think笔记本延长保修"
                                                                                               data-value="04010102"><span
                                        class="searchicon"></span><em>Think笔记本延长保修</em></a><a href="javascript:;"
                                                                                              latag="latag_pc_search_result_延长保修_04010103"
                                                                                              class="le_clickone le_clickmore le_clickprice"
                                                                                              data-name="台式机延长保修"
                                                                                              data-value="04010103"><span
                                        class="searchicon"></span><em>台式机延长保修</em></a><a href="javascript:;"
                                                                                         latag="latag_pc_search_result_延长保修_04010104"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="显示屏延长保修"
                                                                                         data-value="04010104"><span
                                        class="searchicon"></span><em>显示屏延长保修</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_延长保修_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_延长保修_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_延长保修_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="硬件升级" data-type="332">硬件升级：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_硬件升级_64G(上门安装)"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="64G固态盘(含上门安装)" data-value="64G(上门安装)"><span
                                        class="searchicon"></span><em>64G固态盘(含上门安装)</em></a><a href="javascript:;"
                                                                                               latag="latag_pc_search_result_硬件升级_128G(上门安装)"
                                                                                               class="le_clickone le_clickmore le_clickprice"
                                                                                               data-name="128G固态盘(含上门安装)"
                                                                                               data-value="128G(上门安装)"><span
                                        class="searchicon"></span><em>128G固态盘(含上门安装)</em></a><a href="javascript:;"
                                                                                                latag="latag_pc_search_result_硬件升级_256G(上门安装)"
                                                                                                class="le_clickone le_clickmore le_clickprice"
                                                                                                data-name="256G固态盘(含上门安装)"
                                                                                                data-value="256G(上门安装)"><span
                                        class="searchicon"></span><em>256G固态盘(含上门安装)</em></a><a href="javascript:;"
                                                                                                latag="latag_pc_search_result_硬件升级_512G(上门安装)"
                                                                                                class="le_clickone le_clickmore le_clickprice"
                                                                                                data-name="512G固态盘(含上门安装)"
                                                                                                data-value="512G(上门安装)"><span
                                        class="searchicon"></span><em>512G固态盘(含上门安装)</em></a><a href="javascript:;"
                                                                                                latag="latag_pc_search_result_硬件升级_1T(上门安装)"
                                                                                                class="le_clickone le_clickmore le_clickprice"
                                                                                                data-name="1T固态盘(含上门安装)"
                                                                                                data-value="1T(上门安装)"><span
                                        class="searchicon"></span><em>1T固态盘(含上门安装)</em></a><a href="javascript:;"
                                                                                              latag="latag_pc_search_result_硬件升级_4G内存(含上门安装)"
                                                                                              class="le_clickone le_clickmore le_clickprice"
                                                                                              data-name="4G内存(含上门安装)"
                                                                                              data-value="4G内存(含上门安装)"><span
                                        class="searchicon"></span><em>4G内存(含上门安装)</em></a><a href="javascript:;"
                                                                                             latag="latag_pc_search_result_硬件升级_8G内存(含上门安装)"
                                                                                             class="le_clickone le_clickmore le_clickprice"
                                                                                             data-name="8G内存(含上门安装)"
                                                                                             data-value="8G内存(含上门安装)"><span
                                        class="searchicon"></span><em>8G内存(含上门安装)</em></a><a href="javascript:;"
                                                                                             latag="latag_pc_search_result_硬件升级_16G内存(含上门安装)"
                                                                                             class="le_clickone le_clickmore le_clickprice"
                                                                                             data-name="16G内存(含上门安装)"
                                                                                             data-value="16G内存(含上门安装)"><span
                                        class="searchicon"></span><em>16G内存(含上门安装)</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_硬件升级_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_硬件升级_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_硬件升级_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix">
                        <div class="xl" data-name="软件服务" data-type="333">软件服务：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_软件服务_040303"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="电脑加速"
                                                    data-value="040303"><span
                                        class="searchicon"></span><em>电脑加速</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040307"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="新机开荒"
                                                                                      data-value="040307"><span
                                        class="searchicon"></span><em>新机开荒</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040301"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="驱动安装"
                                                                                      data-value="040301"><span
                                        class="searchicon"></span><em>驱动安装</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040306"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="应用指导"
                                                                                      data-value="040306"><span
                                        class="searchicon"></span><em>应用指导</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040302"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="数据恢复"
                                                                                      data-value="040302"><span
                                        class="searchicon"></span><em>数据恢复</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040304"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="专家上门"
                                                                                      data-value="040304"><span
                                        class="searchicon"></span><em>专家上门</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040305"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="游戏加速"
                                                                                      data-value="040305"><span
                                        class="searchicon"></span><em>游戏加速</em></a><a href="javascript:;"
                                                                                      latag="latag_pc_search_result_软件服务_040308"
                                                                                      class="le_clickone le_clickmore le_clickprice"
                                                                                      data-name="浏览器修复"
                                                                                      data-value="040308"><span
                                        class="searchicon"></span><em>浏览器修复</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_软件服务_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_软件服务_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_软件服务_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="上门服务" data-type="329">上门服务：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_上门服务_04010201"
                                                    class="le_clickone le_clickmore le_clickprice"
                                                    data-name="Lenovo笔记本上门服务" data-value="04010201"><span
                                        class="searchicon"></span><em>Lenovo笔记本上门服务</em></a><a href="javascript:;"
                                                                                               latag="latag_pc_search_result_上门服务_04010202"
                                                                                               class="le_clickone le_clickmore le_clickprice"
                                                                                               data-name="Think笔记本上门服务"
                                                                                               data-value="04010202"><span
                                        class="searchicon"></span><em>Think笔记本上门服务</em></a><a href="javascript:;"
                                                                                              latag="latag_pc_search_result_上门服务_04010203"
                                                                                              class="le_clickone le_clickmore le_clickprice"
                                                                                              data-name="台式机上门服务"
                                                                                              data-value="04010203"><span
                                        class="searchicon"></span><em>台式机上门服务</em></a><a href="javascript:;"
                                                                                         latag="latag_pc_search_result_上门服务_04010204"
                                                                                         class="le_clickone le_clickmore le_clickprice"
                                                                                         data-name="显示屏上门服务"
                                                                                         data-value="04010204"><span
                                        class="searchicon"></span><em>显示屏上门服务</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_上门服务_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_上门服务_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_上门服务_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="清洁保养" data-type="334">清洁保养：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_清洁保养_040401"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="电脑深度立体保养"
                                                    data-value="040401"><span
                                        class="searchicon"></span><em>电脑深度立体保养</em></a>
                            <div class="xlb"><input type="button" class="hb"
                                                    latag="latag_pc_search_result_清洁保养_more_cancel" value="取消"><input
                                        type="button" class="hh" latag="latag_pc_search_result_清洁保养_more_confirm"
                                        value="确定"></div>
                        </div>
                        <div class="le_sel_con3"><a href="javascript:;" latag="latag_pc_search_result_清洁保养_more"
                                                    class="dx">多选</a></div>
                    </li>
                    <li class="clearfix" style="display:none;">
                        <div class="xl" data-name="价格" data-type="314">价格：</div>
                        <div class="le_sel_con2"><a href="javascript:;" latag="latag_pc_search_result_价格_0-199"
                                                    class="le_clickone le_clickmore le_clickprice" data-name="199元以下"
                                                    data-value="0-199"><span
                                        class="searchicon"></span><em>199元以下</em></a><a href="javascript:;"
                                                                                        latag="latag_pc_search_result_价格_200-499"
                                                                                        class="le_clickone le_clickmore le_clickprice"
                                                                                        data-name="200-499元"
                                                                                        data-value="200-499"><span
                                        class="searchicon"></span><em>200-499元</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_价格_500-799"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="500-799元"
                                                                                          data-value="500-799"><span
                                        class="searchicon"></span><em>500-799元</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_价格_800-999"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="800-999元"
                                                                                          data-value="800-999"><span
                                        class="searchicon"></span><em>800-999元</em></a><a href="javascript:;"
                                                                                          latag="latag_pc_search_result_价格_1000-1499"
                                                                                          class="le_clickone le_clickmore le_clickprice"
                                                                                          data-name="1000-1499元"
                                                                                          data-value="1000-1499"><span
                                        class="searchicon"></span><em>1000-1499元</em></a><a href="javascript:;"
                                                                                            latag="latag_pc_search_result_价格_1500"
                                                                                            class="le_clickone le_clickmore le_clickprice"
                                                                                            data-name="1500元以上"
                                                                                            data-value="1500"><span
                                        class="searchicon"></span><em>1500元以上</em></a><label><input type="text"
                                                                                                    class="le_low"><span></span><input
                                        type="text" class="le_high"><input type="button" value="确定"
                                                                           class="hh le_input_btn"><span
                                        class="errorMsg"></span></label></div>
                    </li>
                </ul>
                <a href="javascript:;" class="le_sel_down show"><span>更多选项</span><em class="useicon"></em></a><a
                        href="javascript:;" class="le_sel_up"><span>收起</span><em class="useicon"></em></a></div>
        </div>
        <div class="search_protitle clearfix">
            <div class="search_protitle_left"><a latag="latag_pc_search_result_orderby_综合排序" val="0"
                                                 tag="proFilterSort">综合</a> <a latag="latag_pc_search_result_orderby_销量"
                                                                               val="2" tag="proFilterSort"
                                                                               class="active">销量<i></i></a> <a
                        latag="latag_pc_search_result_orderby_时间" val="1" tag="proFilterSort">时间<i></i></a> <a
                        latag="latag_pc_search_result_orderby_价格" val="3" tag="proFilterSort">按价格由高到低</a> <a
                        latag="latag_pc_search_result_orderby_价格" val="4" tag="proFilterSort" style="border-right:0;">按价格由低到高</a>
                <label><input type="checkbox" id="checkStock"> <em>有库存</em> </label></div>
            <div class="search_protitle_center"><input id="keyInResult" type="text" latag="latag_pc_search_result_input"
                                                       placeholder="在结果中搜索"> <input id="searchproductsButton"
                                                                                    latag="latag_pc_search_result_inputconfirm"
                                                                                    type="button" value="确定"></div>
            <div class="search_protitle_right">
                <div class="search_yema"><span pageindextag="pageIndex">1</span>/<span pagecounttag="pageCount">6</span>
                </div>
                <a class="first_page" latag="latag_pc_search_result_first">首页</a> <a class="search_prev"
                                                                                     latag="latag_pc_search_result_prev">上一页</a>
                <a class="search_next active" latag="latag_pc_search_result_next">下一页</a> <a class="last_page"
                                                                                             latag="latag_pc_search_result_last">尾页</a>
            </div>
        </div>
        <div class="search_pro">
            <div class="search_pro_con">
                <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="clearfix" id="productList">
                    <li>
                        <a href="/goods/<?php echo e($good->id); ?>">
                            <img style="cursor: pointer;" target="_blank"
                                 src="/Uploads/Goods/<?php echo e($good->img); ?>" gcode="58075" width="160px" height="160px"
                                 platid="undefined" alt="">
                        </a>
                        <div class="search_pro_name">
                            <a href="http://www.lenovo.com.cn/product/58075.html"
                               latag="latag_pc_search_result_clickname_58075" target="_blank"
                               style="cursor: pointer;" gcode="58075"><?php echo e($good->title); ?>

                            </a>
                        </div>
                        <div class="search_pro_mes">
                            <a target="_blank">
                                <font color="red"><?php echo e($good->info); ?></font>
                            </a>
                        </div>
                        <div class="search_pro_price" style="font-size: 14px;">商城价: <?php echo e($good->price); ?></div>
                        <div class="search_pro_comment clearfix"></div>
                        <div class="search_pro_btn clearfix">
                            <a latag="latag_pc_search_result_addcart_58075" class="search_btn_car addcartCls"
                               salestype="0"
                               activitytype="0" detailtype="0" malltype="1" isoldfornew="0" gcode="58075"
                               platid="undefined"
                               tag="addCart">加入购物车</a><a favtag="1" gcode="58075"
                                                         latag="latag_pc_search_result_addfavorite_58075"
                                                         tag="storePro" platid="undefined" class="search_btn_focus">收藏
                            </a>
                        </div>
                        <img src="/style/home/img/zengpin.png" class="markimg">
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="search_bot_yema clearfix">

                    <div class="search_protitle_right">
                        <div class="search_yema"><span pageindextag="pageIndex">1</span>/<span pagecounttag="pageCount">6</span>
                        </div>
                        <a class="first_page" latag="latag_pc_search_result_first">首页</a>
                        <a class="search_prev" latag="latag_pc_search_result_prev">上一页</a>
                        <a class="search_next active" latag="latag_pc_search_result_next">下一页</a>
                        <a class="last_page" latag="latag_pc_search_result_last">尾页</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--页脚-->
<?php echo $__env->make("home.public.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>