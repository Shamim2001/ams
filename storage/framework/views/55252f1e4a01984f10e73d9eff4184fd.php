<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                            <p class="">Show Here All patient . There Have Total <?php echo e($patients->count()); ?> Patient</p>
                        </div>
                        <a href="<?php echo e(route('admin.patient.create')); ?>" class="btn btn-primary float-end">Create / Import Patient</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>Patient Id</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <p><?php echo $patient->patient_id ?? ""; ?></p>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.patient.edit',$patient->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($patient->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.patient.destroy',$patient->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($patient->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ams\resources\views/backend/pages/patient/index.blade.php ENDPATH**/ ?>