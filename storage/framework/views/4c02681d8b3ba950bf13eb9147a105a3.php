<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-capitalize"><?php echo e(auth()->user()->type); ?></p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="<?php echo e(asset('/')); ?>assets/backend/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <img src="<?php echo e(auth()->user()->image ? asset(auth()->user()->image) : defaultImage(auth()->user()->name)); ?>" alt="" class="img-thumbnail rounded-circle">
                                </div>
                                <h5 class="font-size-15"><?php echo e(auth()->user()->name ?? ""); ?></h5>
                                <p class="text-muted mb-0"><?php echo e(auth()->user()->phone ?? ""); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Dashboard.View')): ?>
                <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total User</p>
                                        <h4 class="mb-0"><?php echo e($total_users); ?></h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bxs-user-rectangle font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Manager</p>
                                        <h4 class="mb-0"><?php echo e($total_manager ?? ''); ?></h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center ">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bxs-user-rectangle font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total Employee</p>
                                        <h4 class="mb-0"><?php echo e($total_employee ?? ''); ?></h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bxs-user-rectangle font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent 10 Registered</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>$SL</th>
                                    <th>User</th>
                                    <th>Role</th>
                                    <th>Approval Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $recent_ten_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td># <?php echo e($loop->iteration); ?></td>
                                        <td>
                                            <a href="javascript: void(0);">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 align-self-center me-3">
                                                        <img src="<?php echo e($user->image ? asset($user->image) : defaultImage($user->name)); ?>" class="rounded-circle avatar-xs" alt="">
                                                    </div>

                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1"><?php echo e($user->name ?? ''); ?></h5>
                                                        <p class="text-truncate mb-0"><?php echo e($user->email ?? ''); ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <p class="text-capitalize"><?php echo e($user->type); ?></p>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('user.approve',$user->id)); ?>">
                                                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                    <input class="form-check-input" type="checkbox" <?php echo e($user->is_approve == true ? 'checked' : ''); ?> id="pending">
                                                    <label class="form-check-label" for=""><?php echo e($user->is_approve == true ?'Approved' : 'Pending'); ?></label>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="4">
                                            <div class="py-5 text-center">
                                                <h1>No Data Found</h1>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/msssteelbuilders/public_html/ams/resources/views/backend/pages/dashboard/dashboard.blade.php ENDPATH**/ ?>