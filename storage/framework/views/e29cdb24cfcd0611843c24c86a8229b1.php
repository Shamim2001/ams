<header class="bixol-header bg-sticky-white">
   <!-- <div class="bixol-info-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="bixol-info-left">
                        <p style="font-size:larger">Walecome to <span>The Chemicals Ltd.</span></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="bixol-info-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="bixol-header-top">
        <div class="container">
            <div class="bixol-header-top-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bixol-header-top-left1">
                            

                            <a href="<?php echo e(route('home')); ?>" style="width: 100%">
                                <div class="bixol-header-item" style="width: 100%">
                                    <div class="bixol-item-content-logo">
                                        <img src="<?php echo e(asset('assets/frontend/')); ?>/logo_thechemi.png">
                                     </div>
                                     <div class="bixol-item-content-text" style="width: 100%; height: 80px">
                                         <h1>The Chemicals Ltd. </h1>

                                     <!--<img src="<?php echo e(asset('assets/frontend/')); ?>/logo-text.png" style="height: 100%">-->
                                     </div>
                                </div>

                            </a>


                            <!-- <div class="bixol-header-item">
                                 <span class="bixol-icon-wrapper">
                                     <i class="flaticon flaticon-alarm-clock"></i>                                        </span>
                                 <div class="bixol-item-content">
                                     <label>Sunday - Friday:</label>
                                     <span>(210) 123 451</span>                                        </div>
                             </div>-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Menu -->
    <div class="bixol-navigation">
        <div class="container">
            <div class="bixol-nav">
            <!--<a href="index.html" class="bixol-header-logo"><img src="<?php echo e(asset('assets/frontend/')); ?>/images/logo.png" alt=""></a>-->
                <nav class="desktop-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="has-submenu">
                            <a href="<?php echo e(url('about')); ?>">About Us</a>
                            <ul>
                             <!--<li><a class="<?php echo e(Route::is('who-we-are') ? 'active' : ''); ?>" href="<?php echo e(route('who-we-are')); ?>">Who We Are</a></li>-->
                            <li><a class="<?php echo e(Route::is('leadership-team') ? 'active' : ''); ?>" href="<?php echo e(route('leadership-team')); ?>">Leadership Team</a></li>
                            <li><a class="<?php echo e(Route::is('why-the-chemical') ? 'active' : ''); ?>" href="<?php echo e(route('why-the-chemical')); ?>">Why The Chemical</a></li>
                            <!--<li><a class="<?php echo e(Route::is('our-certification') ? 'active' : ''); ?>" href="<?php echo e(route('our-certification')); ?>">Our Certifications</a></li>-->
                            </ul>
                        </li>
                        <li><a href="<?php echo e(url('service')); ?>">Services</a></li>
                        <!--<li><a href="<?php echo e(route('products')); ?>">Products</a>-->
                        <li><a href="<?php echo e(route('we-present')); ?>">We Represent</a>

                        <li><a href="<?php echo e(route('our-customer')); ?>">Our Customer</a>
                        <li><a href="<?php echo e(route('products')); ?>">Products</a>

                        <li><a href="<?php echo e(route('link-resource')); ?>">Link & Resources</a>
                        <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bixol-mobile-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <a href="index.html" class="bixol-logo"><img src="<?php echo e(asset('assets/frontend/')); ?>/logo.png" alt=""></a>
                    </div>

                    <div class="col-6">
                        <div class="bixol-mobile-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Mobile Menu -->
<div class="bixol-mobile-menu">
    <a href="index.html" class="mobile-menu-logo">  <img src="<?php echo e(asset('assets/frontend/')); ?>/logo_thechemi.png" alt=""></a>
    <!--<ul>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(url('/')); ?>">Home</a></li>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(url('about')); ?>">About Us</a></li>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(url('service')); ?>">Services</a></li>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(route('products')); ?>">Products</a>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(route('our-customer')); ?>">Our Customer</a>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(route('we-present')); ?>">We Represent</a>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(route('link-resource')); ?>">Link & Resources</a>-->
    <!--    <li class="has-submenu"><a href="<?php echo e(route('contact')); ?>">Contact</a></li>-->
    <!--</ul>-->
      <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="has-submenu">
                            <a href="#">About Us</a>
                            <ul>
                             <!--<li><a class="<?php echo e(Route::is('who-we-are') ? 'active' : ''); ?>" href="<?php echo e(route('who-we-are')); ?>">Who We Are</a></li>-->
                            <li><a class="<?php echo e(Route::is('leadership-team') ? 'active' : ''); ?>" href="<?php echo e(route('leadership-team')); ?>">Leadership Team</a></li>
                            <li><a class="<?php echo e(Route::is('why-the-chemical') ? 'active' : ''); ?>" href="<?php echo e(route('why-the-chemical')); ?>">Why The Chemical</a></li>
                            <!--<li><a class="<?php echo e(Route::is('our-certification') ? 'active' : ''); ?>" href="<?php echo e(route('our-certification')); ?>">Our Certifications</a></li>-->
                            </ul>
                        </li>
                        <li><a href="<?php echo e(url('service')); ?>">Services</a></li>
                         <li><a href="<?php echo e(route('we-present')); ?>">We Represent</a>
                        <li><a href="<?php echo e(route('our-customer')); ?>">Our Customer</a>

                        <li><a href="<?php echo e(route('products')); ?>">Products</a>
                        <li><a href="<?php echo e(route('link-resource')); ?>">Link & Resources</a>
                        <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                    </ul>
</div>
<?php /**PATH C:\laragon\www\chemical\resources\views/frontend/includes/header.blade.php ENDPATH**/ ?>