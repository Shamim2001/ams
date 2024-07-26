<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                            <p class="">Show Here All Customer . There Have Total <?php echo e($customers->count()); ?> Customer</p>
                        </div>
                        <a href="<?php echo e(route('admin.customer.create')); ?>" class="btn btn-primary float-end">Create Customer</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Customer Name</th>
                                <th>Customer Url</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>#<?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($customer->customer_name); ?></td>
                                    <td><?php echo e($customer->customer_website); ?></td>
                                    <?php if(isset($customer->logo) && $customer->logo): ?>
                                    <td><img class="table-list-image" src="<?php echo e(asset('/')); ?>/<?php echo e($customer->logo); ?>" style="width: 80px; height: 80px"></td>
                                    <?php else: ?>
                                    <td><img class="table-list-image" src="<?php echo e(asset('/')); ?>assets/frontend/images/no-image.jpg" style="width: 80px; height: 80px"></td>
                                    <?php endif; ?>
                                    <td>
                                        <a href="<?php echo e(route('admin.customer.edit',$customer->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($customer->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.customer.destroy',$customer->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($customer->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\php-8-2\htdocs\chemical\resources\views/backend/pages/customer/index.blade.php ENDPATH**/ ?>