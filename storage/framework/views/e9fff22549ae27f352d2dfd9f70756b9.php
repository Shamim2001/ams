<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h3 class="">Show Here All Type data.</h3>
                        </div>
                        <a href="" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody class="align-middle">
                            <?php $__empty_1 = true; $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td style="width: 5%" scope="row" class="text-center">
                                        <?php echo e($questions->perPage() * ($questions->currentPage() - 1) + ++$key); ?>

                                    </td>
                                    <td><?php echo e($question->name); ?></td>
                                    <td class="text-center"><?php echo e($question->updated_at->diffForHumans()); ?></td>

                                    <td class="text-center">
                                        <a href="<?php echo e(route('admin.question.edit',$question->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($question->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.question.destroy',$question->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($question->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ams\resources\views/backend/question/index.blade.php ENDPATH**/ ?>