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
                    <div class="col-lg-6">
                        <div class="bixol-header-top-left">
                            <a href="<?php echo e(route('home')); ?>">
                                <div class="bixol-header-item">
                                    <!--<span class="bixol-icon-wrapper">
                                        <i class="flaticon flaticon-phone"></i>  </span>-->
                                    <div class="bixol-item-content">


                                        <img src="<?php echo e(asset('assets/frontend/')); ?>/logo.png">
                                        <!--<label>Requesting a Call:</label>
                                        <span>(210) 123 451</span>-->
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
                    <!--<div class="col-lg-6">
                        <div class="bixol-header-top-right">
                            <!-- <div class="bixol-header-item">
                                 <span class="bixol-icon-wrapper">
                                     <i class="flaticon flaticon-mail"></i>                                        </span>
                                 <div class="bixol-item-content">
                                     <label>info@thechemicals.net</label>
                                     <span>Mail to us</span>
                                 </div>

                                 <a href="tel:1234563257"></a>
                                 </div>-->


                            <!--<div class="bixol-header-item">
                                <!--<span class="bixol-icon-wrapper">
                                    <i class="flaticon flaticon-pin"></i>
                                </span>-->
                               <!-- <div class="bixol-item-content">
                                    <label>69/C Green Road, 3rd Floor Panthapath</label>
                                    <span>Dhanmondi</span>
                                </div>
                            </div>
                        </div>
                    </div>-->
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
                        <li class="has-submenu"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="has-submenu"><a href="<?php echo e(url('about')); ?>">About Us</a></li>
                        <li class="has-submenu"><a href="<?php echo e(url('service')); ?>">Services</a></li>
                        <li class="has-submenu"><a href="<?php echo e(route('products')); ?>">Products</a>
                        <li class="has-submenu"><a href="<?php echo e(route('our-customer')); ?>">Our Customer</a>
                        <li class="has-submenu"><a href="<?php echo e(route('we-present')); ?>">We Represent</a>
                        <li class="has-submenu"><a href="<?php echo e(route('link-resource')); ?>">Link & Resources</a>
                        <li class="has-submenu"><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
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
    <a href="index.html" class="mobile-menu-logo"><img src="<?php echo e(asset('assets/frontend/')); ?>/images/logo.png" alt=""></a>
    <ul>
        <li class="has-submenu"><a href="<?php echo e(url('/')); ?>">Home</a></li>
        <li class="has-submenu"><a href="<?php echo e(url('about')); ?>">About Us</a></li>
        <li class="has-submenu"><a href="<?php echo e(url('service')); ?>">Services</a></li>
        <li class="has-submenu"><a href="<?php echo e(route('products')); ?>">Products</a>
        <li class="has-submenu"><a href="<?php echo e(route('our-customer')); ?>">Our Customer</a>
        <li class="has-submenu"><a href="<?php echo e(route('we-present')); ?>">We Represent</a>
        <li class="has-submenu"><a href="<?php echo e(route('link-resource')); ?>">Link & Resources</a>
        <li class="has-submenu"><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
    </ul>
</div>
<?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/includes/header.blade.php ENDPATH**/ ?>