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
                <div class="">
                    <h4 class="text-center">Any Product search here</h4>
                </div>
                <ul class="tag" >
                    <li><a href="#sectiona">A</a></li>
                    <li><a href="#sectionb">B</a></li>
                    <li><a href="#sectionc">C</a></li>
                    <li><a href="#sectiond">D</a></li>
                    <li><a href="#sectiond">E</a></li>
                    <li><a href="#sectiond">F</a></li>
                    <li><a href="#sectiond">G</a></li>
                    <li><a href="#sectiond">H</a></li>
                    <li><a href="#sectiond">I</a></li>
                    <li><a href="#sectiond">J</a></li>
                    <li><a href="#sectiond">K</a></li>
                    <li><a href="#sectiond">L</a></li>
                    <li><a href="#sectiond">M</a></li>
                    <li><a href="#sectiond">N</a></li>
                    <li><a href="#sectiond">O</a></li>
                    <li><a href="#sectiond">P</a></li>
                    <li><a href="#sectiond">Q</a></li>
                    <li><a href="#sectiond">R</a></li>
                    <li><a href="#sectiond">S</a></li>
                    <li><a href="#sectiond">T</a></li>
                    <li><a href="#sectiond">U</a></li>
                    <li><a href="#sectiond">V</a></li>
                    <li><a href="#sectiond">W</a></li>
                    <li><a href="#sectiond">X</a></li>
                    <li><a href="#sectiond">Y</a></li>
                    <li><a href="#sectiond">Z</a></li>
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
                            <div class="card rounded-0 shadow">
                                <img class="img-fluid card-img-top rounded-0" src="<?php echo e($item->image ? asset($item->image) : asset('assets/frontend/images/product/pro.jpg')); ?>" alt="">
                                <div class="card-body">
                                    <h5 class="mb-2" style="color: blue;"><?php echo e($item->name); ?></h5>
                                    <p class="m-0">Technical name : <?php echo e($item->technical_name); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\Camical\chemical\resources\views/frontend/components/products/products.blade.php ENDPATH**/ ?>