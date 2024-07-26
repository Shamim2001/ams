<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
     <section class="section bg-cta" style="margin-top: 70px;">
    <div class="bg-overlay"></div>
    <!--<div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="col-lg-8 d-flex justify-content-center align-items-center">-->
    <!--            <h3 class="text-center text-capitalize">-->
    <!--                 <?php echo e($title); ?>-->

    <!--            </h3>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <br>
    <br>
</section>
<section class="section bg-light">
    <div class="container">
        <div class="row">

            


                  


                    <div class="p-5 align-items-start">
                        <div class="our-supplier">
                        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="logo-items">
                       <a class="" href="<?php echo e(($supplier->company_website)); ?>" target="_blank">
                          <img class="img-fluid" src="<?php echo e(asset('/')); ?>images/<?php echo e($supplier->logo); ?>" alt="<?php echo e($supplier->company_name); ?>" style="height: 150px">
                          </a>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>



            </div>
        </div>
        
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\thechemicals\resources\views/frontend/pages/we-present/we-present.blade.php ENDPATH**/ ?>