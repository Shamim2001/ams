<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                            <p class="">Show Here All Services . There Have Total <?php echo e($services->count()); ?> Services</p>
                        </div>
                        <a href="<?php echo e(route('admin.service.create')); ?>" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Icon</th>
                                <th>Service</th>
                                <th>Sort Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>#<?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <div class="rounded" style="width: 50px;height: 50px;overflow: hidden">
                                            <img src="<?php echo e($service->icon ? asset($service->icon) : defaultImage($service->title)); ?>" class="rounded img-fluid" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.service.show',$service->id)); ?>">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 align-self-center me-3">
                                                    <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                        <img src="<?php echo e($service->image ? asset($service->image) : defaultImage($service->title)); ?>" class="rounded img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1"><?php echo e($service->title ?? ''); ?></h5>
                                                    <p class="text-muted mb-0"><?php echo e($service->created_at->diffForHumans() ?? ''); ?></p>
                                                    <?php if($service->status == true): ?>
                                                        <small class="text-white">
                                                            Status : <div style="display: inline-block; width: 20px;height: 8px;border-radius: 50px;background: green;"></div> &nbsp;Publihsed
                                                        </small>
                                                    <?php else: ?>
                                                        <small class="text-white">
                                                            Status : <div style="display: inline-block; width: 20px;height: 8px;border-radius: 50px;background: red;"></div> &nbsp;Unpublihsed
                                                        </small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <p><?php echo $service->short_description ?? ""; ?></p>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.service.edit',$service->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($service->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.service.destroy',$service->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($service->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6">
                                        <div class="p-5 text-center">
                                            <h1 class="display-4 font-bold">No Data Found</h1>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\Camical\chemical\resources\views/backend/pages/service/index.blade.php ENDPATH**/ ?>