<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(setting('web_name') ?? config('app.name')); ?> || <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/odometer-theme-car.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/rs6.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/custom.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>

    <?php echo $__env->make('frontend.components.utils.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="#" class="scrolltop-btn"><span><i class="flaticon-arrow"></i></span></a>
<?php echo $__env->make('frontend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('frontend.components.home.about_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/slick.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/easing.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/wow.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/before-after.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/odometer.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/isotope.pkgd.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/piechart.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/appear.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/rbtools.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/vendor/rs6.min.js"></script>
<script src="<?php echo e(asset('assets/frontend/')); ?>/js/main.js"></script>




<script>
    var	tpj = jQuery;
    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {init:function() {
            window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
            if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
            window.revapi1 = jQuery(window.revapi1);
            if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
            revapi1.revolutionInit({
                revapi:"revapi1",
                sliderLayout:"fullwidth",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:"1230,1024,778,480",
                gridheight:"676,676,560,520",
                spinner:"spinner0",
                perspective:600,
                perspectiveType:"global",
                keepBPHeight:true,
                editorheight:"676,676,560,520",
                responsiveLevels:"1240,1024,778,480",
                progressBar:{disableProgressBar:true},
                navigation: {
                    onHoverStop:false,
                    bullets: {
                        enable:true,
                        tmp:"",
                        style:"bixol-bullet-number",
                        hide_onleave:true,
                        h_align:"left",
                        v_align:"center",
                        h_offset:30,
                        v_offset:0,
                        direction:"vertical"
                    }
                },
                viewPort: {
                    global:false,
                    globalDist:"-200px",
                    enable:false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
            });

        }} // End of RevInitScript
    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>




<?php echo $__env->yieldContent('script'); ?>
</body>
</html>

<?php /**PATH /home/thechemicals/public_html/resources/views/frontend/layout/app.blade.php ENDPATH**/ ?>