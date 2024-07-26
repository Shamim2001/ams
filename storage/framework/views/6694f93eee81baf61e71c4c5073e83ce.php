
<div class="hero-slider-1">
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="home-1" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" data-version="6.5.7">
            <rs-slides>

                    <rs-layer
                        id="slider-1-slide-2-layer-0"
                        data-type="image"
                        data-rsp_ch="on"
                        data-xy="x:c;y:b;yo:-1px,0,0,0;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:['100%','100%','100%','100%'];"
                        data-basealign="slide"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:8;"
                    ><img src="<?php echo e(asset('/')); ?>assets/frontend/images/slider/home1/bg-slider-shape1.png" alt="bg-slider-shape1" class="tp-rs-img" width="2600" height="309" data-no-retina>                        </rs-layer>

                    <rs-layer
                        id="slider-1-slide-2-layer-1"
                        data-type="image"
                        data-xy="x:c;xo:-65px;yo:100px;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:['138px','138px','138px','138px'];h:['118px','118px','118px','118px'];"
                        data-rsp_bd="off"
                        data-frame_999="o:0;st:w;sR:8700;"
                        data-loop_999="sX:0.8;sY:0.8;o:0.6;sp:3000;e:power0.inOut;yys:t;yyf:t;"
                        style="z-index:9;"
                    ><img src="<?php echo e(asset('/')); ?>assets/frontend/images/slider/home1/slider-star1.png" alt="slider-star1" class="tp-rs-img" width="138" height="118" data-no-retina>                        </rs-layer>
                </rs-slide>

                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <rs-slide style="position: absolute;" data-key="rs-<?php echo e($key + 1); ?>" data-title="Slide" data-thumb="<?php echo e($slider->image ? asset($slider->image) : asset('assets/frontend/bg-slider3-50x100.jpg')); ?>" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                    <img src="<?php echo e($slider->image ? asset($slider->image) : asset('assets/frontend/images/slider/home1/bg-slider3.jpg')); ?>" title="bg-slider3" width="1920" height="680" class="rev-slidebg tp-rs-img" data-panzoom="d:10000;ss:115%;se:100;" data-no-retina>

                    <rs-group
                        id="slider-1-slide-3-layer-2"
                        data-type="group"
                        data-xy="x:c;y:t,t,m,m;yo:125px,125px,-20px,-20px;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:800px,800px,600px,500px;h:350px,350px,320px,300px;"
                        data-rsp_bd="off"
                        data-frame_0="o:1;"
                        data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                        style="z-index:14;"
                    >

                        <rs-layer
                            id="slider-1-slide-3-layer-5"
                            data-type="text"
                            data-color="#082680"
                            data-xy="x:c;yo:26px;"
                            data-text="w:normal;s:70,70,50,36;l:80,80,60,48;ls:-2px,-2px,-2px,-1px;fw:700;a:center;"
                            data-rsp_o="off"
                            data-rsp_bd="off"
                            data-frame_0="o:1;"
                            data-frame_0_chars="d:5;x:105%;o:1;rY:45deg;rZ:90deg;"
                            data-frame_0_mask="u:t;"
                            data-frame_1="st:1000;sp:800;sR:1000;"
                            data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;"
                            data-frame_1_mask="u:t;"
                            data-frame_999="o:0;st:w;sR:4600;"
                            style="z-index:11;font-family:'Poppins';"
                        >  <?php echo nl2br($slider->title ?? ""); ?> </rs-layer>

                        <rs-layer
                        id="slider-1-slide-3-layer-5"
                        data-type="text"
                        data-color="#850101"
                        data-xy="x:c;yo:102px,202px,165px,146px;"
                        data-text="w:normal;s:70,70,50,36;l:80,80,60,48;ls:-2px,-2px,-2px,-1px;fw:700;a:center;"
                        data-rsp_o="off"
                        data-rsp_bd="off"
                        data-frame_0="o:1;"
                        data-frame_0_chars="d:5;x:105%;o:1;rY:45deg;rZ:90deg;"
                        data-frame_0_mask="u:t;"
                        data-frame_1="st:1000;sp:800;sR:1000;"
                        data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;"
                        data-frame_1_mask="u:t;"
                        data-frame_999="o:0;st:w;sR:4600;"
                        style="z-index:11;font-family:'Poppins';"
                    >  <?php echo nl2br($slider->title_two ?? ""); ?> </rs-layer>

                        <rs-layer
                            id="slider-1-slide-3-layer-6"
                            data-type="text"
                            data-color="#3a4268"
                            data-xy="x:c;yo:202px,202px,165px,146px;"
                            data-text="w:normal;s:18,18,18,16;l:26,26,26,24;a:center;"
                            data-dim="w:420px,420px,420px,300px;"
                            data-rsp_o="off"
                            data-rsp_bd="off"
                            data-frame_0="y:50;"
                            data-frame_1="st:3400;sp:1000;sR:3400;"
                            data-frame_999="o:0;st:w;sR:4600;"
                            style="z-index:12;font-family:'Rubik';"
                        ><?php echo e($slider->description); ?></rs-layer>

                         <a
                               id="slider-1-slide-3-layer-7"
                               class="rs-layer"
                               href="<?php echo e($slider->url); ?>" target="_self" rel="nofollow"
                               data-type="text"
                               data-color="#2b2b2b"
                               data-xy="x:c;y:b;"
                               data-text="w:normal;s:18;l:25,20,15,9;fw:500;"
                               data-rsp_o="off"
                               data-rsp_bd="off"
                               data-frame_0="y:50;"
                               data-frame_1="st:3600;sp:1000;sR:3600;"
                               data-frame_999="o:0;st:w;sR:4400;"
                               style="z-index:13;font-family:'Roboto';"
                           >
                         </a>
                    </rs-group>

                    <rs-layer
                        id="slider-1-slide-3-layer-0"
                        data-type="image"
                        data-rsp_ch="on"
                        data-xy="x:c;y:b;yo:-1px,0,0,0;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:['100%','100%','100%','100%'];"
                        data-basealign="slide"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:8;"
                    ><img src="<?php echo e(asset('assets/frontend/images/slider/home1/bg-slider-shape1.png')); ?>" alt="bg-slider-shape1" class="tp-rs-img" width="2600" height="309" data-no-retina>                        </rs-layer>

                    <rs-layer
                        id="slider-1-slide-3-layer-1"
                        data-type="image"
                        data-xy="xo:30px;yo:80px;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:138px,114px,86px,53px;h:118px,98px,74px,45px;"
                        data-rsp_bd="off"
                        data-frame_999="o:0;st:w;sR:8700;"
                        data-loop_999="sX:0.8;sY:0.8;o:0.6;sp:3000;e:power0.inOut;yys:t;yyf:t;"
                        style="z-index:9;"
                    ><img src="<?php echo e(asset('/')); ?>assets/frontend/images/slider/home1/slider-star1.png" alt="slider-star1" class="tp-rs-img" width="138" height="118" data-no-retina>                        </rs-layer>
                </rs-slide>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </rs-slides>
        </rs-module>
    </rs-module-wrap>

</div>

<style>
    .tp-bullets{
        display: none;
    }
</style>
<?php /**PATH H:\php-8-2\htdocs\chemical\resources\views/frontend/components/home/hero.blade.php ENDPATH**/ ?>