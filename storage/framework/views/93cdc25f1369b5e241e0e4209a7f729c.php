<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
     <section class="section bg-cta" style="margin-top: 70px;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 d-flex justify-content-center align-items-center">
                <h3 class="text-center text-capitalize">
                     <?php echo e($title); ?>

                   
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light">
    <div class="container">
        <div class="row">
            
            
              
              
                   <?php $__currentLoopData = $countrys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                     <?php if($suppliers->count() > 0): ?>
                     <div class="p-5 align-items-start">  
                        <h2><?php echo e($country->country_name); ?></h2>
                        <table class="supplier-table">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Logo</th>        
                                </tr>        
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($supplier->country_id==$country->id): ?>
                                        <tr>
                                            <td><?php echo e($supplier->company_name); ?></td>
                                            <?php if(isset($supplier->logo) && $supplier->logo): ?>
                                            <td><img class="table-list-image" src="<?php echo e(asset('/')); ?>images/<?php echo e($supplier->logo); ?>" style="width: 100px; height: 80px"></td>
                                            <?php else: ?>
                                            <td>&nbsp;</td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                     </div> 
                     <?php else: ?>  
                       <div class="p-5 align-items-start">  
                            No Data Found
                        </div>
                     <?php endif; ?>  
                     
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              
            </div>
        </div>
        
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/pages/we-present/we-present.blade.php ENDPATH**/ ?>