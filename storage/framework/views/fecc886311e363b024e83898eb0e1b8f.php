<?php $__env->startSection('style'); ?>
    <style>
        .ql-toolbar.ql-snow{
            background: white !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                            <p class="">Submit All Information</p>
                        </div>
                        <a href="<?php echo e(route('admin.team-member.index')); ?>" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="<?php echo e(route('admin.team-member.update',$member->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Member Info</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   value="<?php echo e($member->name ?? old('name')); ?>"
                                                   placeholder="Enter Member Name">
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Position Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="position"
                                                   class="form-control <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   value="<?php echo e($member->position ?? old('position')); ?>"
                                                   placeholder="Enter Member Position Name">
                                            <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="mdi mdi-facebook"></i></div>
                                                    <input type="text" value="<?php echo e($member->fb_url); ?>" name="fb_url" class="form-control" placeholder="FB URL">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="mdi mdi-youtube"></i></div>
                                                    <input type="text" value="<?php echo e($member->youtube_url); ?>" name="youtube_url" class="form-control" placeholder="Youtube URL">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="input-group-text"><i class="mdi mdi-instagram"></i></div>
                                                    <input type="text" value="<?php echo e($member->insta_url); ?>" name="insta_url" class="form-control" placeholder="Instagram URL">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary float-end">Sumbit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Member Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <label for="">Member Image</label>
                                        <label for="image" class="d-block">
                                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                                <div class="">
                                                    <img class="image img-fluid" src="<?php echo e(asset($member->image)); ?>">
                                                    <input type="file"
                                                           id="image"
                                                           onchange="prevImage('image');"
                                                           class="sr-only"
                                                           name="image">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/backend/pages/member/edit.blade.php ENDPATH**/ ?>