<?php $__env->startSection('page_content'); ?>
    <div class="card mb-2">
        <div class="card-header">
            <h4 class="m-0">Website Info</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.setting.update')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Website Favicon</label>
                        <label for="website_favicon" class="d-block">
                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                <div class="">
                                    <img class="website_favicon img-fluid" src="<?php echo e(asset(setting('website_favicon'))); ?>">
                                    <input type="hidden" name="types[]" value="website_favicon">
                                    <input type="file"
                                           id="website_favicon"
                                           onchange="prevImage('website_favicon');"
                                           class="sr-only"
                                           name="website_favicon">
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="">Website Logo</label>
                        <label for="website_logo" class="d-block">
                            <div class="border-secondary rounded p-2 d-flex justify-content-center align-items-center" style="border:1px dashed">
                                <div class="">
                                    <img class="website_logo img-fluid" src="<?php echo e(asset(setting('website_logo'))); ?>">
                                    <input type="hidden" name="types[]" value="website_logo">
                                    <input type="file"
                                           id="website_logo"
                                           onchange="prevImage('website_logo');"
                                           class="sr-only"
                                           name="website_logo">
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for=""> Website Name <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="website_name">
                    <input type="text" name="website_name" value="<?php echo e(setting('website_name')); ?>" class="form-control" id="" placeholder="Website Name" required>
                </div>

                <div class="mb-3">
                    <label for=""> Website About <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="website_about">
                    <input type="text" name="website_about" value="<?php echo e(setting('website_about')); ?>" class="form-control" id="" placeholder="Website About" required>
                </div>

                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card mb-2">
        <div class="card-header">
            <h4 class="m-0">Footer</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.setting.update')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
               <div class="my-3">
                   <h4>Open Hours</h4>
                       <div class="mb-3">
                           <label for=""> Open Hours <span class="fw-bolder text-danger">*</span></label>
                           <input type="hidden" name="types[]" value="f_open_hours">
                           <textarea name="f_open_hours" id="" class="form-control" rows="2"><?php echo nl2br(setting('f_open_hours')); ?></textarea>
                       </div>
               </div>
                <div class="my-3">
                   <h4>Social Link</h4>
                   <div class="row">
                       <div class="col-md-6">
                           <div class="mb-3">
                               <label for=""> Facebook <span class="fw-bolder text-danger">*</span></label>
                               <input type="hidden" name="types[]" value="f_fb_url">
                               <input type="url" name="f_fb_url" value="<?php echo e(setting('f_fb_url')); ?>" class="form-control" id="" placeholder="Facebook Url" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="mb-3">
                               <label for=""> Youtube <span class="fw-bolder text-danger">*</span></label>
                               <input type="hidden" name="types[]" value="f_youtube_url">
                               <input type="url" name="f_youtube_url" value="<?php echo e(setting('f_youtube_url')); ?>" class="form-control" id="" placeholder="Youtube Url" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="mb-3">
                               <label for=""> Linkedin <span class="fw-bolder text-danger">*</span></label>
                               <input type="hidden" name="types[]" value="f_linkedin_url">
                               <input type="url" name="f_linkedin_url" value="<?php echo e(setting('f_linkedin_url')); ?>" class="form-control" id="" placeholder="Linkedin Url" required>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="mb-3">
                               <label for=""> Instagram <span class="fw-bolder text-danger">*</span></label>
                               <input type="hidden" name="types[]" value="f_instagram_url">
                               <input type="url" name="f_instagram_url" value="<?php echo e(setting('f_instagram_url')); ?>" class="form-control" id="" placeholder="Instagram Url" required>
                           </div>
                       </div>
                   </div>
               </div>
                <div class="my-3">
                    <h4>Footer Address</h4>
                    <div class="row">
                        <div class="mb-3">
                            <label for=""> Location <span class="fw-bolder text-danger">*</span></label>
                            <input type="hidden" name="types[]" value="f_location">
                            <textarea name="f_location" id="" class="form-control" rows="2"><?php echo nl2br(setting('f_location')); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for=""> Phone Number <span class="fw-bolder text-danger">*</span></label>
                            <input type="hidden" name="types[]" value="f_phone">
                            <textarea name="f_phone" id="" class="form-control" rows="2"><?php echo nl2br(setting('f_phone')); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for=""> Email Address <span class="fw-bolder text-danger">*</span></label>
                            <input type="hidden" name="types[]" value="f_email">
                            <textarea name="f_email" id="" class="form-control" rows="2"><?php echo nl2br(setting('f_email')); ?></textarea>
                        </div>

                    </div>
                </div>

                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.pages.setting.pages.page_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/backend/pages/setting/pages/web-settings.blade.php ENDPATH**/ ?>