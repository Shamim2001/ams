<section class="bixol-team-area pt-100 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="bixol-title-area">
                    <span class="bixol-subtitle">Team Members</span>
                    <h3>We have an expert team <span>to serve you.</span></h3>
                </div>
            </div>
        </div>
        <div class="bixol-team-container bixol-team-slider">
            <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bixol-team-single">
                    <div class="bixol-img-wrapper">
                        <img src="<?php echo e($member->image ? asset($member->image) : asset('assets/frontend/images/home1/team-1.jpg')); ?>" alt="">
                    </div>
                    <div class="bixol-team-content">
                        <a href="#"><h5><?php echo e($member->name ?? ""); ?></h5></a>
                        <span><?php echo e($member->position ?? ""); ?></span>
                        <span class="team-social-link"><i class="fas fa-share-alt"></i></span>
                        <div class="bixol-team-social-items">
                            <a href="<?php echo e($member->insta_url); ?>"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo e($member->youtube_url); ?>"><i class="fab fa-youtube"></i></a>
                            <a href="<?php echo e($member->fb_url); ?>"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\thechemicals\resources\views/frontend/components/home/member.blade.php ENDPATH**/ ?>