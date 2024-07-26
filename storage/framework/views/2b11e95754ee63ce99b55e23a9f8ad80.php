<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Area -->
    <div class="bixol-breadcrumb" data-background="<?php echo e(asset('/')); ?>assets/frontend/images/login-banner.webp">
        <span class="breadcrumb-object"><img src="<?php echo e(asset('/')); ?>assets/frontend/images/home1/slider-object.png" alt=""></span>
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Login</h1>
                <a href="/">Home <i class="fas fa-angle-double-right"></i></a>
                <span>Login</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Area V2 -->
    <section class="contact-v2 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Login Now</h4>
                        </div>
                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label for="">Email Address</label>
                                    <input type="email"
                                           name="email"
                                           class="form-control border border-primary <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           placeholder="Enter Your Email Address">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-2">
                                    <label for="">Password</label>
                                    <input type="password"
                                           name="password"
                                           class="form-control border border-primary <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           placeholder="Enter Your Password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger"></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-2">
                                    <button class="float-end btn btn-dark btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact V2 End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ams\resources\views/frontend/pages/auth/login.blade.php ENDPATH**/ ?>