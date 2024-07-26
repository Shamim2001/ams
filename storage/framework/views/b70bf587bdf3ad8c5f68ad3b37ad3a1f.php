
<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .tag{
            display: flex;
            overflow-x: scroll;
        }

        .tag li a{
            display: block;
            background: #eaeaea;
            padding: 0 12px;
            border-radius: 5px;
            margin: 0px 6px;
            font-size: 20px;
            font-weight: bold;
        }
        .product-list{
            padding-bottom: 50px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="product-list" style="width: 80%; margin: auto;">

        <div class="container">
            <div class="mt-3" style="text-align: right;">
                <a href="<?php echo e(route('search.products')); ?>" class="btn btn-primary">Search By ABCD</a>
            </div>

                        <div class="row mt-2">
                        <div class="items-wrapper">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="product-card" href="<?php echo e(route('product-details',$product->slug)); ?>">
                                <div class="title-part">
                                    <h3><?php echo e($product->name); ?></h3>
                                </div>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </div>
                    </div>
                </div>

               </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/frontend/pages/products/productsearch.blade.php ENDPATH**/ ?>