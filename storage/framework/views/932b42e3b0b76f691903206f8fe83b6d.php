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
                        <a href="<?php echo e(route('admin.product.index')); ?>" class="btn btn-primary float-end">List</a>
                    </div>
                    <div class="card-body">
                        <form class="row" action="<?php echo e(route('admin.product.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-12 col-md-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Product Info</h4>
                                    </div>
                                    <div class="card-body">

                                        
                                        <div class="row mb-3">
                                            <label for="inputTitle" class="col-form-label">Company <span class="text-danger fw-bolder">*</span></label>
                                            
                                                <select name="company_id" class="form-control">
                                                    <option value=""> Select Company </option>
                                               <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        
                                        </div>    

                                        <div class="mb-3">
                                            <label class="form-label">Product Name <span class="text-danger fw-bolder">*</span></label>
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
                                                   value="<?php echo e(old('name')); ?>"
                                                   placeholder="Enter Product Name">
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
                                            <label class="form-label">Technical Name <span class="text-danger fw-bolder">*</span></label>
                                            <input type="text"
                                                   name="technical_name"
                                                   class="form-control <?php $__errorArgs = ['technical_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   value="<?php echo e(old('technical_name')); ?>"
                                                   placeholder="Enter Technical Name">
                                            <?php $__errorArgs = ['technical_name'];
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
                                       
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-12 col-md-5">-->
                            <!--    <div class="card">-->
                            <!--        <div class="card-header">-->
                            <!--            <h4>Product Media</h4>-->
                            <!--        </div>-->
                            <!--        <div class="card-body">-->
                            <!--            <label for="">Product Image <span class="text-danger fw-bolder">*</span></label>-->
                            <!--            <label for="image" class="d-block">-->
                            <!--                <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">-->
                            <!--                    <div class="">-->
                            <!--                        <img class="image img-fluid">-->
                            <!--                        <input type="file"-->
                            <!--                               id="image"-->
                            <!--                               onchange="prevImage('image');"-->
                            <!--                               class="sr-only"-->
                            <!--                               name="image">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </label>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Product Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="description" class="form-control" id="description" rows="10"><?php echo old('description'); ?></textarea>
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/backend/pages/product/create.blade.php ENDPATH**/ ?>