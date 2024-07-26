<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline-block"><?php echo e($title); ?></h4>
                        <a href="<?php echo e(route('admin.slider.create')); ?>"
                           class="btn btn-primary waves-effect float-end">
                            <i class="fa fa-plus-circle"></i>
                            Slider Create
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 mb-2 h-100">
                                    <div class="card h-100 border shadow">
                                        <img class="img-fluid" src="<?php echo e(asset($slider->image)); ?>" alt="Slider Image">
                                        <div class="card-body">
                                            <a href="<?php echo e(route('admin.slider.edit',$slider->id)); ?>"><h5><?php echo e($slider->title ?? ''); ?></h5></a>
                                            <a href="<?php echo e(route('admin.slider.edit',$slider->id)); ?>"><h5><?php echo e($slider->title_two ?? ''); ?></h5></a>
                                            <small><?php echo e($slider->description ?? ''); ?></small>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?php echo e(route('admin.slider.edit',$slider->id)); ?>" class="btn btn-sm btn-primary float-start"><i class="fa fa-edit"></i></a>
                                            <a onclick="deleteData(<?php echo e($slider->id); ?>)" class="btn btn-sm btn-danger float-end"><i class="fa fa-trash"></i></a>
                                            <form action="<?php echo e(route('admin.slider.destroy',$slider->id)); ?>" class="d-none" id="delete-form-<?php echo e($slider->id); ?>" method="post"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?></form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\chemical\resources\views/backend/pages/slider/index.blade.php ENDPATH**/ ?>