<section class="bixol-services">
    <div class="container">
        <div class="bixol-service-wrapper bixol-service-slider">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bixol-single-item">
                    <div class="bixol-icon-wrapper">
                        <img src="<?php echo e($service->icon ? asset($service->icon) : asset('assets/frontend/images/services/icon-1.png')); ?>" alt="">                        </div>
                    <div class="bixol-sr-content">
                        <a href="<?php echo e(route('service-details',$service->slug)); ?>"><h6><?php echo e($service->title ?? ""); ?></h6></a>
                        <p><?php echo e($service->short_description ?? ""); ?></p>
                        <a href="<?php echo e(route('service-details',$service->slug)); ?>" class="bixol-readmore-btn">Read More</a>
                    </div>

                    <div class="bixol-sr-hover">
                        <div class="img-wrapper">
                            <img src="<?php echo e($service->image ? asset($service->image) : asset('assets/frontend/images/services/01.jpg')); ?>" alt="">
                            <span class="img-shadow"></span>
                        </div>
                        <div class="icon-wrapper">
                            <div class="bixol-img">
                                <img src="<?php echo e($service->icon ? asset($service->icon) : asset('assets/frontend/images/services/icon-1.png')); ?>" style="width: 50px;height: 50px;" alt="">
                            </div>
                            <span class="bixol-icon-shadow"></span>
                        </div>
                        <div class="bixol-sr-content">
                            <a href="<?php echo e(route('service-details',$service->slug)); ?>"><h6><?php echo e($service->title ?? ""); ?></h6></a>
                            <p><?php echo e($service->short_description ?? ""); ?></p>
                            <a href="<?php echo e(route('service-details',$service->slug)); ?>" class="bixol-readmore-btn">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /home3/msssteelbuilders/public_html/ams/resources/views/frontend/components/home/service.blade.php ENDPATH**/ ?>