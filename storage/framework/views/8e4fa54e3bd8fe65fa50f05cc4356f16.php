<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <p class="">Show Here All persons . There Have Total </p>
                        </div>
                        <a href="<?php echo e(route('admin.person.create')); ?>" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody class="align-middle">
                            <?php $__empty_1 = true; $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td style="width: 5%" scope="row" class="text-center">
                                        <?php echo e($persons->perPage() * ($persons->currentPage() - 1) + ++$key); ?>

                                    </td>
                                    <td>
                                        <a href="javascript: void(0);">
                                            <div class="d-flex">
                                                

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1"><?php echo e($person->name ?? ''); ?></h5>
                                                    <p class="text-muted mb-0"><?php echo e($person->created_at->diffForHumans() ?? ''); ?></p>
                                                    <p class="mb-0"><?php echo e($person->address); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td><?php echo e($person->phone); ?></td>
                                    <td class="text-center"><?php echo e($person->gender); ?></td>

                                    <td class="text-center">
                                        <a href="<?php echo e(route('admin.person.edit',$person->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($person->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.person.destroy',$person->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($person->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="5">
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ams\resources\views/backend/person/index.blade.php ENDPATH**/ ?>