<?php $__env->startSection('title', $title = 'home'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h4 class="text-center">List of the local company we are dealing with :</h4>
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">

                    <tbody>
                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><a href="<?php echo e(($customer->customer_website)); ?>"><?php echo e($customer->customer_name); ?></a></td>
                                    <td></td>
                                    <td class="text-end" style="margin: auto;"><a href="<?php echo e(($customer->customer_website)); ?>"><img class="img-fluid"
                                            src="<?php echo e($customer->logo ? asset($customer->logo) : defaultImage($customer->logo)); ?>"
                                            alt="" style="height: 70px; width: auto;"></a></td>
                                </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\panthopoth\resources\views/frontend/pages/customer/customer.blade.php ENDPATH**/ ?>