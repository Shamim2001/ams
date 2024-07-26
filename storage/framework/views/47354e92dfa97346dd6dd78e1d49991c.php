
<br>
<section class="section" id="contact">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center mx-auto">
                <h2 class="text-primary section-header">Contact us</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
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
<?php /**PATH /home4/eworldltd/public_html/resources/views/frontend/components/contract/contract.blade.php ENDPATH**/ ?>