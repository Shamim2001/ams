<?php $__env->startSection('title', $title = 'home'); ?>
<?php $__env->startSection('content'); ?>
 <section class="section bg-cta" style="margin-top: 70px;">
    <div class="bg-overlay"></div>
    <!--<div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--        <div class="col-lg-8 d-flex justify-content-center align-items-center">-->
    <!--            <h3 class="text-center text-capitalize">-->
    <!--                 List of the local company we are dealing with -->
                   
    <!--            </h3>-->
               
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
     <br>
                <br>
</section>
<section class="section bg-light">
    <div class="container mt-4">
        

        <div class="row mt-3">
            <div class="col-12">
                <div class="our-customers">
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="logo-items">
                            <a class="" href="<?php echo e(($customer->customer_website)); ?>" target="_blank">
                                <img class="img-fluid" src="<?php echo e($customer->logo ? asset($customer->logo) : defaultImage($customer->logo)); ?>" alt="" style="width: 100%;height:auto;">
                            </a>
                      </div>        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>    
            </div>
        </div>

    </div>
</section>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\chemical\resources\views/frontend/pages/customer/customer.blade.php ENDPATH**/ ?>