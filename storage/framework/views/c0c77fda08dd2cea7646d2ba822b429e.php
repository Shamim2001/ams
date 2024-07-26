<?php $__env->startSection('page_content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>About Us Section</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.setting.update')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-md-4">
                        <label for="">Background Banner</label>
                        <label for="about_bg_banner" class="d-block">
                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                <div class="">
                                    <img class="about_bg_banner img-fluid" src="<?php echo e(asset(setting('about_bg_banner'))); ?>">
                                    <input type="hidden" name="types[]" value="about_bg_banner">
                                    <input type="file"
                                           id="about_bg_banner"
                                           onchange="prevImage('about_bg_banner');"
                                           class="sr-only"
                                           name="about_bg_banner">
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="">Slider Before Image</label>
                        <label for="about_slider_before_banner" class="d-block">
                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                <div class="">
                                    <img class="about_slider_before_banner img-fluid" src="<?php echo e(asset(setting('about_slider_before_banner'))); ?>">
                                    <input type="hidden" name="types[]" value="about_slider_before_banner">
                                    <input type="file"
                                           id="about_slider_before_banner"
                                           onchange="prevImage('about_slider_before_banner');"
                                           class="sr-only"
                                           name="about_slider_before_banner">
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="">Slider After Image</label>
                        <label for="about_slider_after_banner" class="d-block">
                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                <div class="">
                                    <img class="about_slider_after_banner img-fluid" src="<?php echo e(asset(setting('about_slider_after_banner'))); ?>">
                                    <input type="hidden" name="types[]" value="about_slider_after_banner">
                                    <input type="file"
                                           id="about_slider_after_banner"
                                           onchange="prevImage('about_slider_after_banner');"
                                           class="sr-only"
                                           name="about_slider_after_banner">
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="my-3">
                    <label for="">Title <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="about_title">
                    <input type="text" name="about_title" value="<?php echo e(setting('about_title')); ?>" class="form-control" id="" placeholder="About Title" required>
                </div>
                <div class="my-3">
                    <label for="">Description <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="about_description">
                    <textarea name="about_description" id="" class="form-control"  rows="5"><?php echo setting('about_description'); ?></textarea>
                </div>

                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.pages.setting.pages.page_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/backend/pages/setting/pages/home.blade.php ENDPATH**/ ?>