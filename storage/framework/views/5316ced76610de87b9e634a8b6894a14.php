<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.components.component.breadcome_section',['title'=>$title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <br>
    <br>
    <section class="section bg-light" style="padding: 50px 0">
        <div class="container">
            <div class="row">
                <div class="about-description">
                    <p>The Chemicals is one of the largest indenting house in Bangladesh specialized in International sourcing of Chemicals and Pharmaceutical Raw Materials for our customers in Home and Abroad. We supply the following quality raw materials for our valued customers:</p>
                </div>
            </div>
            <div class="row" style="margin-top: 50px">
                <div class="about-description">
                    <div class="syndicate col-md-12">
                        <ul>
                            <li><span class="number">1</span>Industrial Chemicals</li>
                            <li><span class="number">2</span>Pharmaceutical Raw Materials</li>
                            <li><span class="number">3</span>Veterinary Products</li>
                            <li><span class="number">4</span> Food Additives</li>
                            <li><span class="number">5</span>Agrochemicals and Fertilizers</li>
                        </ul>    
                    </div>    
                </div>
            </div>   
        </div>
    </section>         
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/frontend/pages/about/about.blade.php ENDPATH**/ ?>