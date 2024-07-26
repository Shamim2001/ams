<footer class="bixol-footer" data-background="<?php echo e(asset('assets/frontend/')); ?>/images/home1/footer-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <img src="<?php echo e(setting('website_logo') ? asset(setting('website_logo')) : asset('assets/frontend/logo.png')); ?>">
                    <p><?php echo e(setting('website_about')); ?></p>
                    <div class="footer-office-time">
                        <h6>Open Hours:</h6>
                        <p><?php echo nl2br(setting('f_open_hours')); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Subscribe our newsletter to get our latest update & news</p>
                    <div class="bixol-footer-form">
                        <form action="#">
                            <input type="email" placeholder="Your mail adress">
                            <button type="submit"><i class="far fa-paper-plane"></i></button>
                        </form>
                    </div>
                    <div class="bixol-footer-social">
                        <a href="<?php echo e(setting('f_fb_url') ?? ''); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo e(setting('f_youtube_url') ?? ''); ?>" class="twitter"><i class="fab fa-youtube"></i></a>
                        <a href="<?php echo e(setting('f_linkedin_url') ?? ''); ?>" class="dribbble"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo e(setting('f_instagram_url') ?? ''); ?>" class="behance"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <h4>Official info</h4>
                    <div class="bixol-footer-address">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i><?php echo nl2br(setting('f_location')); ?></li>
                            <li><i class="fas fa-phone"></i><?php echo nl2br(setting('f_phone')); ?></li>
                            <li><i class="fas fa-envelope"></i><?php echo nl2br(setting('f_email')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <h4>Instagram</h4>
                    <div class="bixol-insta-widget">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <img src="<?php echo e(asset('assets/frontend/')); ?>/images/home1/insta-1.jpg" alt="">                                    </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <img src="<?php echo e(asset('assets/frontend/')); ?>/images/home1/insta-2.jpg" alt="">                                    </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <img src="<?php echo e(asset('assets/frontend/')); ?>/images/home1/insta-3.jpg" alt="">                                    </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <img src="<?php echo e(asset('assets/frontend/')); ?>/images/home1/insta-4.jpg" alt="">                                    </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <img src="<?php echo e(asset('assets/frontend/')); ?>/images/home1/insta-5.jpg" alt="">                                    </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <img src="<?php echo e(asset('assets/frontend/')); ?>/images/home1/insta-6.jpg" alt="">                                    </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/includes/footer.blade.php ENDPATH**/ ?>