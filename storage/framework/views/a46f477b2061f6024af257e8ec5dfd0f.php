
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .tag {
            display: flex;
            overflow-x: scroll;
        }

        .tag li a {
            display: block;
            background: #eaeaea;
            padding: 0 12px;
            border-radius: 5px;
            margin: 0px 6px;
            font-size: 20px;
            font-weight: bold;
        }

        .product-list {
            padding-bottom: 50px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    

    <section class="product-list" style="width: 80%; margin: auto;">

        <div class="container">
            <div class="mt-3" style="text-align: right;">
                <a href="<?php echo e(route('products')); ?>" class="btn btn-primary">Search By Product</a>
            </div>
            
            <?php $__currentLoopData = $product_company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productcompany): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-12">
                        <?php $__currentLoopData = $companys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($productcompany->company_id == $company->id): ?>
                                <div class="company_title text-center">
                                    <h5><?php echo e($company->name); ?></h5>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="row">

                    <!--<div class="card" style="width: 18rem;">-->

                    <div class="items-wrapper">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->company_id == $productcompany->company_id): ?>
                                <a class="product-card" href="<?php echo e(route('product-details', $item->slug)); ?>">
                                    <!--<img class="img-fluid card-img-top rounded-0" style="height:70px;" src="<?php echo e($item->image ? asset($item->image) : asset('assets/frontend/images/product/pro.jpg')); ?>" alt="">-->
                                    <div class="title-part">
                                        <h3><?php echo e($item->name); ?></h3>

                                    </div>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
        </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/frontend/pages/products/products.blade.php ENDPATH**/ ?>