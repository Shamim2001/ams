
<br>
<section class="section" id="contact">
    <div class="container">
        <!--<div class="row mb-5">-->
        <!--    <div class="col text-center mx-auto">-->
        <!--        <h2 class="text-primary section-header">Contact us</h2>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="row mt-3">-->
        <!--    <div class="col-md-12">-->
        <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.91805838022!2d90.38451077605121!3d23.75030128877885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb2fb00001%3A0x8affe462fe3a8bb2!2zM3JkIEZsb29yLCA2OC02OSDgppfgp43gprDgp4Dgpqgg4Kaw4KeL4KahLCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1707308097860!5m2!1sbn!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
        <!--    </div>-->
        <!--</div>    -->
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="">
                    <div class="float-start">
                        <i class="avatar-s me-2 align-middle" data-feather="mail"></i>
                    </div>
                    <div>
                        <h6 class="text-dark fs-16">Email Address</h6>
                        <p class="m-0 p-0 fs-16">
                            <a class="text-muted" href="mailto:<?php echo e(setting('get_office_address')); ?>"><?php echo e(setting('get_mail_address')); ?></a>
                        </p>
                     </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="">
                    <div class="float-start">
                        <i class="avatar-s me-2 align-middle" data-feather="phone-call"></i>
                    </div>
                    <div>
                        <h6 class="text-dark fs-16">Phone number</h6>
                        <p class="fs-16 m-0 p-0">
                            <a class="text-muted" href="tel:<?php echo e(setting('get_office_address')); ?>"><?php echo e(setting('get_telephone_number')); ?></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="">
                    <div class="float-start">
                        <i class="avatar-s me-2 align-middle" data-feather="map-pin"></i>
                    </div>
                    <div>
                        <h6 class="text-dark fs-16">Office Address</h6>
                        <p class="text-muted fs-16"><?php echo e(setting('get_office_address')); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 ">
            <div class="col-lg-12">
                <div class="row mt-5">
                    <div class="col-lg-8 mx-auto">
                        <div class="custom-form mt-4 mt-lg-0">
                            <form action="<?php echo e(route('contract-message.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <p id="error-msg"></p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="" class="text-dark fw-bold">Name</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-3">
                                            <input name="name"
                                                   id="name"
                                                   type="text"
                                                   class="form-control text-dark fw-bold"
                                                   placeholder="Your name..."
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="" class="text-dark fw-bold">Email Address</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-3">
                                            <input name="email" id="email" type="email" class="form-control text-dark fw-bold"
                                                   placeholder="Your email..." required>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="text-dark fw-bold">Subject</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-3">
                                            <input name="subject" id="subject" type="text" class="form-control text-dark fw-bold"
                                                   placeholder="Your subject..." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="text-dark fw-bold">Your Message</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-3">
                                                <textarea name="message"
                                                          id="comments"
                                                          rows="4"
                                                          class="form-control text-dark fw-bold"
                                                          placeholder="Your message..."
                                                          required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <div class="col-lg-8">
                                        <input type="submit" id="submit" name="send"
                                               class="submitBnt btn btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</section>
<br>
<?php /**PATH C:\laragon\www\ams\resources\views/frontend/components/contract/contract.blade.php ENDPATH**/ ?>