<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="list-group">
                                    <li class="list-group-item <?php echo e(Route::is('admin.setting.pages')  ? 'bg-primary' : ''); ?>"><a class="d-block nav-link" href="<?php echo e(route('admin.setting.pages')); ?>">Home Page</a></li>
                                    <li class="list-group-item <?php echo e(Route::is('admin.setting.get-in-touch')  ? 'bg-primary' : ''); ?>"><a class="d-block nav-link" href="<?php echo e(route('admin.setting.get-in-touch')); ?>">Get in touch</a></li>
                                    <li class="list-group-item <?php echo e(Route::is('admin.setting.web-settings')  ? 'bg-primary' : ''); ?>"><a class="d-block nav-link" href="<?php echo e(route('admin.setting.web-settings')); ?>">Web Settings</a></li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <?php echo $__env->yieldContent('page_content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\chemical\resources\views/backend/pages/setting/pages/page_layout.blade.php ENDPATH**/ ?>