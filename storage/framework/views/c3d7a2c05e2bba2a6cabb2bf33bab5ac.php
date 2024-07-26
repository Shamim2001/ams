<?php $__env->startSection('title',$title = "home"); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.components.home.hero',['sliders'=>$sliders], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    

    

    

    <style>
        .slider-container {
    width: 100% !important;
    height: 100% !important;
    /* Other styles... */
    }

    @media (max-width: 768px) {
    .rs_splitted_words {
        font-size: 33px;
        /* Modify styles for smaller screens */
    }
}
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/frontend/pages/home/home.blade.php ENDPATH**/ ?>