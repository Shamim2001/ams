
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.components.component.breadcome_section', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <section class="section bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row">
                <div class="member-detail md">
                    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key == 0): ?>
                            <div class="content">
                                <div class="img-part">
                                    <img src="<?php echo e($member->image ? asset($member->image) : asset('assets/frontend/images/home1/team-1.jpg')); ?>"
                                        style="height:600px;" alt="">
                                </div>
                                <div class="text-part">
                                    <h2 class="name"><?php echo e($member->name ?? ''); ?></h2>
                                    <h6><?php echo e($member->position ?? ''); ?></h6>
                                    <hr>
                                    <!--<div class="social-links-wrapper">-->
                                    <!--    <a class="instagram" href="<?php echo e($member->insta_url); ?>"><i class="fab fa-instagram"></i></a>-->
                                    <!--    <a class="youtube" href="<?php echo e($member->youtube_url); ?>"><i class="fab fa-youtube"></i></a>-->
                                    <!--    <a class="facebook" href="<?php echo e($member->fb_url); ?>"><i class="fab fa-facebook-f"></i></a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="row" style="margin-top: 100px">
                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key != 0): ?>
                        <div class="col-md-4">
                            <div class="img-part">
                                <img src="<?php echo e($member->image ? asset($member->image) : asset('assets/frontend/images/home1/team-1.jpg')); ?>"
                                    alt="">
                            </div>
                            <div class="text-part">
                                <h2 class="name"><?php echo e($member->name ?? ''); ?></h2>
                                <h6><?php echo e($member->position ?? ''); ?></h6>
                                <hr>
                                <!--<div class="social-links-wrapper">-->
                                <!--    <a class="instagram" href="<?php echo e($member->insta_url); ?>"><i class="fab fa-instagram"></i></a>-->
                                <!--    <a class="youtube" href="<?php echo e($member->youtube_url); ?>"><i class="fab fa-youtube"></i></a>-->
                                <!--    <a class="facebook" href="<?php echo e($member->fb_url); ?>"><i class="fab fa-facebook-f"></i></a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/frontend/pages/leadership-team/leadership-team.blade.php ENDPATH**/ ?>