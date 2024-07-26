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
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container">

            <div class="my-5">
                <div class="w-50 mx-auto">
                    <form action="<?php echo e(route('product-search')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb-3">
                            <input type="search" name="query" class="form-control" placeholder="Search Any Product Here....." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
                <ul class="tag" >
                    <li><a href="#sectiona">A</a></li>
                    <li><a href="#sectionb">B</a></li>
                    <li><a href="#sectionc">C</a></li>
                    <li><a href="#sectiond">D</a></li>
                    <li><a href="#sectione">E</a></li>
                    <li><a href="#sectionf">F</a></li>
                    <li><a href="#sectiong">G</a></li>
                    <li><a href="#sectionh">H</a></li>
                    <li><a href="#sectioni">I</a></li>
                    <li><a href="#sectionj">J</a></li>
                    <li><a href="#sectionk">K</a></li>
                    <li><a href="#sectionl">L</a></li>
                    <li><a href="#sectionm">M</a></li>
                    <li><a href="#sectionn">N</a></li>
                    <li><a href="#sectiono">O</a></li>
                    <li><a href="#sectionp">P</a></li>
                    <li><a href="#sectionq">Q</a></li>
                    <li><a href="#sectionr">R</a></li>
                    <li><a href="#sections">S</a></li>
                    <li><a href="#sectiont">T</a></li>
                    <li><a href="#sectionu">U</a></li>
                    <li><a href="#sectionv">V</a></li>
                    <li><a href="#sectionw">W</a></li>
                    <li><a href="#sectionx">X</a></li>
                    <li><a href="#sectiony">Y</a></li>
                    <li><a href="#sectionz">Z</a></li>
                </ul>
            </div>

        </div>
    </section>
    <section class="mb-4">
        <div class="container">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="" id="section<?php echo e($key); ?>">
                <div class="py-2" style="background: #ececec">
                    <a href="" class="text-uppercase" style="display: inline-block;border-right: 4px solid blue;font-size: 23px;font-weight: bold;padding: 0 10px;"><?php echo e($key); ?></a>
                </div>
                <div class="row my-3">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 mb-3">
                            <a href="<?php echo e(route('product-details',$item->slug)); ?>">
                                <div class="card rounded-0 shadow h-100">
                                    <img class="img-fluid card-img-top rounded-0" src="<?php echo e($item->image ? asset($item->image) : asset('assets/frontend/images/product/pro.jpg')); ?>" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-2" style="color: blue;"><?php echo e($item->name); ?></h5>
                                        <p class="m-0">Technical name : <?php echo e($item->technical_name); ?></p>
                                        <div class="mt-2">
                                            <a href="<?php echo e(route('product-details',$item->slug)); ?>" class="float-end">More Info...</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/pages/products/products.blade.php ENDPATH**/ ?>