<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .product-name:first-letter{
            color: red;
            font-size: 35px !important;
        }

        .description h1{
            margin-bottom: 10px !important;
        }
        .description h2{
            margin: 10px 0 !important;
        }
        .description h3{
            margin-bottom: 10px !important;
        }
        .description h4{
            margin-bottom: 10px !important;
        }
        .description h5{
            margin-bottom: 10px !important;
        }
        .description h6{
            margin-bottom: 10px !important;
        }

        description p{
            margin-bottom: 20px !important;
        }

        .description table{
            border: 1px solid #c7c7c7;
            width: 100%;
        }

        .description table tr td{
            padding: 10px 5px;
            border: 1px solid #c7c7c7;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="p-3 shadow border">
                        <img class="img-fluid" src="<?php echo e($product->image ? asset($product->image) : asset('assets/frontend/images/product/pro.jpg')); ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="card rounded-0 shadow">
                        <div class="card-header" style="background: #0066ff;">
                            <h4 class="product-name font-bold text-center text-white"><?php echo e($product->name ?? ""); ?></h4>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th>Technical Name : <?php echo e($product->technical_name ?? ""); ?></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php if($product->description): ?>
                    <div class="col-md-12 mt-4">
                        <div class="p-3 description">
                            <?php echo $product->description ?? ""; ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\Camical\chemical\resources\views/frontend/pages/products/product-details.blade.php ENDPATH**/ ?>