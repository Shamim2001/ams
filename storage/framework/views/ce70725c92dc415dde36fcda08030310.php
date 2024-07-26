<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('frontend.components.contract.contract', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/pages/contract/contract.blade.php ENDPATH**/ ?>