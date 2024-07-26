<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
     <?php echo $__env->make('frontend.components.component.breadcome_section',['title'=>$title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <br>
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="syndicate col-md-12">
                    <ul>
                    <?php $__currentLoopData = $link_resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link_resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <span class="number"><?php echo e($loop->iteration); ?></span>
                            <a href="http://<?php echo e($link_resource->link_resource); ?>"><?php echo e($link_resource->link_resource); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>    
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="float-end">
                        <?php echo $link_resources->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/pages/link-resources/link-resources.blade.php ENDPATH**/ ?>