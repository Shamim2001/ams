<?php $__env->startSection('page_content'); ?>
    <div class="card">
        <div class="card-header">
            <h4 class="m-0">Get In Touch Info</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.setting.update')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for=""> Office Address <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="get_office_address">
                    <input type="text" name="get_office_address" value="<?php echo e(setting('get_office_address')); ?>" class="form-control" id="" placeholder="Office Address" required>
                </div>
                <div class="mb-3">
                    <label for="">Telephone Number<span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="get_telephone_number">
                    <input type="text" name="get_telephone_number" value="<?php echo e(setting('get_telephone_number')); ?>" class="form-control" id="" placeholder="Telephone Number" required>
                </div>
                <div class="mb-3">
                    <label for=""> Mail Address <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="get_mail_address">
                    <input type="text" name="get_mail_address" value="<?php echo e(setting('get_mail_address')); ?>" class="form-control" id="" placeholder="Mail Address" required>
                </div>

                <div class="mb-3">
                    <label for=""> Google Map <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="google_map">
                    <input type="text" name="google_map" value="<?php echo e(setting('google_map')); ?>" class="form-control" id="" placeholder="Google Map" required>
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.pages.setting.pages.page_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\thechemicals\resources\views/backend/pages/setting/pages/get_in_touch.blade.php ENDPATH**/ ?>