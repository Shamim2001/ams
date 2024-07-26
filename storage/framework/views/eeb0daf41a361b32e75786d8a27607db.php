<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                            <p class="">Show Here All Members . There Have Total <?php echo e($members->count()); ?> Members</p>
                        </div>
                        <a href="<?php echo e(route('admin.team-member.create')); ?>" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Member</th>
                                <th>Social Media</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>#<?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.team-member.show',$member->id)); ?>">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 align-self-center me-3">
                                                    <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">
                                                        <img src="<?php echo e($member->image ? asset($member->image) : defaultImage($member->name)); ?>" class="rounded img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1"><?php echo e($member->name ?? ''); ?></h5>
                                                    <p class="text-muted mb-0"><?php echo e($member->created_at->diffForHumans() ?? ''); ?></p>
                                                    <p>Position : <?php echo e($member->position ?? ""); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <?php if($member->fb_url): ?>
                                        <a href="<?php echo e($member->fb_url); ?>" class="btn btn-primary"><i class="mdi mdi-facebook"></i></a>
                                        <?php endif; ?>
                                        <?php if($member->youtube_url): ?>
                                            <a href="<?php echo e($member->youtube_url); ?>"  class="btn btn-danger"><i class="mdi mdi-youtube"></i></a>
                                        <?php endif; ?>
                                        <?php if($member->insta_url): ?>
                                            <a href="<?php echo e($member->insta_url); ?>" class="btn btn-info"><i class="mdi mdi-instagram"></i></a>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.team-member.edit',$member->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($member->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.team-member.destroy',$member->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($member->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/backend/pages/member/index.blade.php ENDPATH**/ ?>