<?php $__env->startSection('title',$title); ?>
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
                        <a href="<?php echo e(route('admin.company.index')); ?>" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="<?php echo e(route('admin.company.update',$company->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Company Info</h4>
                                    </div>
                                    <div class="card-body">

                                        


                                        <div class="mb-3">
                                            <label class="form-label">Company Name <span class="text-danger fw-bolder">*</span></label>
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
                                                   value="<?php echo e($company->name ?? old('name')); ?>"
                                                   placeholder="Enter Company Name">
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
                                        
                                        <button class="btn btn-primary float-end">Sumbit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Company Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <label for="">Company Image</label>
                                        <label for="image" class="d-block">
                                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                                <div class="">
                                                    <img class="image img-fluid" src="<?php echo e($company->image ? asset($company->image) :" "); ?>">
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Service Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="description" class="form-control" id="description" rows="10"><?php echo $company->description ?? old('description'); ?></textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary float-end">Sumbit</button>
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

<?php $__env->startSection('script'); ?>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/backend/pages/company/edit.blade.php ENDPATH**/ ?>