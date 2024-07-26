<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.components.component.breadcome_section',['title'=>$title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $__env->make('frontend.components.component.single_service',['service'=>$service], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="my-5 py-5">
                        <h1>No Data Found</h1>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="float-end">
                        <?php echo $services->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ams\resources\views/frontend/pages/service/service.blade.php ENDPATH**/ ?>