<?php $__env->startSection('content'); ?>




    <style>
            .banner-image {
    height: 400px; /* Adjust height as needed */
    background-size: cover;
    background-position: center;
    position: relative;
}

.banner-content {
    position: absolute;
    top: 50%;
    left: 20px; /* Adjust left positioning as needed */
    transform: translateY(-50%);
    color: #fff;
}

.banner-content h1 {
    font-weight: 700;
    font-size: 70px;
    line-height: 80px;
    max-width: 680px;
    color: #ffffff;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.1);
    display: inline-block;
    font-weight: 700;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    font-family: "Lato", sans-serif;
    color: #ffffff;
    margin-bottom: 10px;
    max-width: 680px;
    transition: all 0.3s ease;
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-family: "Lora", serif;
    font-size: 3rem; /* Adjust font size as needed */
}

.banner-content p {
    font-size: 5rem; /* Adjust font size as needed */
    margin-top: 20px;
    color: #ffffff;
}
.title-part {
    max-width: 1322px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding-bottom: 40px;
    box-sizing: border-box;
}
.h2 {
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    padding: 10px 20px;
    display: inline-block;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    background: rgba(0, 90, 169, 0.1);
    font-family: "Lato", sans-serif;
    color: #005aa9;
    margin-bottom: 10px;
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
div {
    display: block;
}


    </style>


<div class="container-fluid p-0">
    <div class="banner-image" style="background-image: url('https://images.pexels.com/photos/2280568/pexels-photo-2280568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
        <div class="banner-content">
            <h1>About Us</h1>
            <p>Who we are </p>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="title-part">
        <h2 class="title">WHO WE ARE</h2><div class="detail">Partner of your progress.

    </div>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-4">
              <p style align="justify">  Welcome to The Chemicals Limited, a leading indenting company dedicated to providing exceptional services in the chemical industry.With a commitment to excellence and innovation, we strive to connect manufacturers with customers, facilitating seamless transactions and fostering long-term relationships.</p>
            </div>
            <div class="col-4">
              <p style align="justify">Our team of experienced professionals is driven by a passion for delivering value and exceeding expectations. 
At The Chemicals Limited, integrity, reliability, and customer satisfaction are at the core of everything we do. Join us in shaping the future of the chemical industry
.</p>
            </div>


        </div>

    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-2">
                 <img src="<?php echo e(('assets/frontend/who_we.jpg')); ?>"  style="width: 820px; height: 600px;" alt="...">

          </div>
        </div>
    </div>
  </div>

</div>
<br>
<br>
<br>
<br>










<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thechemicals/public_html/resources/views/frontend/pages/who-we-are/who-we-are.blade.php ENDPATH**/ ?>