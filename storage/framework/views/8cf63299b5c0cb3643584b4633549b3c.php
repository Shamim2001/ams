<section class="bixol-about-section pt-60 pb-16" style="padding: 100px 0px 80px 0">
    <span class="bixol-about-bg"><img src="<?php echo e(setting('about_bg_banner') ? asset(setting('about_bg_banner')) : asset('assets/frontend/images/home1/bg-before-after.jpg')); ?>" alt=""></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="bixol-about-left">
                    <div class="bixol-slider-wrapper">
                        <div class="bixol-slider-content">
                            <div class="icon-wrapper">
                                <i class="flaticon flaticon-factory"></i>
                            </div>
                            <div class="content-bottom">
                                <span>Established</span>
                                <h6>1997</h6>
                            </div>
                        </div>
                        <div class="bixol-compare-slider">
                            <div class="before-after">
                                <img src="<?php echo e(setting('about_slider_before_banner') ? asset(setting('about_slider_before_banner')) : asset('assets/frontend/images/home1/compare-1.jpg')); ?>" alt="">
                                <img src="<?php echo e(setting('about_slider_after_banner') ? asset(setting('about_slider_after_banner')) : asset('assets/frontend/images/home1/compare-2.jpg')); ?>" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="bixol-about-right">
                    <div class="bixol-title-area">
                        <span class="bixol-subtitle"><h2><?php echo e(setting('about_title')); ?></h2></span>
                        <!--<h3>Why will you choose <span>our services?</span></h3>-->
                        <p><?php echo setting('about_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\ams\resources\views/frontend/components/home/about.blade.php ENDPATH**/ ?>