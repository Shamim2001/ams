<?php $__env->startSection('title',$title = "home"); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.components.home.hero',['sliders'=>$sliders], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($services->count() > 0): ?>
        <?php echo $__env->make('frontend.components.home.service',['services'=>$services], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->make('frontend.components.home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.components.home.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.components.home.member',['members'=>$members], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.components.home.get_in_touch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="bixol-footer-top">
        <?php if(setting('google_map')): ?>
            <?php echo setting('google_map'); ?>

        <?php else: ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.0478472451387!2d89.52051241542163!3d22.87469082757795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9b22f47801e5%3A0x35d43df27f4bfa29!2sThemeXriver!5e0!3m2!1sen!2sbd!4v1628338847721!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/pages/home/home.blade.php ENDPATH**/ ?>