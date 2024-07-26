<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold"><?php echo e($title); ?></h2>
                            <p class="">Show Here All Products . There Have Total <?php echo e($products->count()); ?> Products</p>
                        </div>
                        <a href="<?php echo e(route('admin.product.create')); ?>" class="btn btn-primary float-end">Add product</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Product</th>
                                <th>Social Media</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>#<?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <a href="#">
                                            <div class="d-flex">
                                                <!--<div class="flex-shrink-0 align-self-center me-3">-->
                                                <!--    <div class="rounded" style="width: 120px;height: 80px;overflow: hidden">-->
                                                <!--        <img src="<?php echo e($product->image ? asset($product->image) : defaultImage($product->name)); ?>" class="rounded img-fluid" alt="">-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <div class="flex-grow-1 overflow-hidden">
                                                    
                                                    <h5 class="text-truncate font-size-14 mb-1"><?php echo e($product->name ?? ''); ?></h5>
                                                    <p class="text-muted mb-0">Technical Name : <?php echo e($product->technical_name ?? ""); ?></p>
                                                    <?php $__currentLoopData = $companys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($company->id==$product->company_id): ?>
                                                    <p class="text-muted mb-0">Company Name : <?php echo e($company->name ?? ""); ?></p>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <p class="text-muted mb-0"><?php echo e($product->created_at->diffForHumans() ?? ''); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                   <td>
                                       <h3 class="fw-bolder text-center text-uppercase"><?php echo e($product->letter ?? ""); ?></h3>
                                   </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.product.edit',$product->id)); ?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData(<?php echo e($product->id); ?>)" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                            <form class="d-none"
                                                  action="<?php echo e(route('admin.product.destroy',$product->id)); ?>"
                                                  method="post"
                                                  id="delete-form-<?php echo e($product->id); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELEte'); ?></form>
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

<?php echo $__env->make('backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\php-8-2\htdocs\chemical\resources\views/backend/pages/product/index.blade.php ENDPATH**/ ?>