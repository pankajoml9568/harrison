<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Title-->
<?php echo $__env->make('includes.title', ['banner' => '', 'title'=>'Contact Us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Page Content-->
  <section class="cover-background big-section xs-no-padding-tb xs-border-tb border-color-medium-gray wow animate__fadeIn" style="background-image: url(&quot;<?php echo e(asset('assets/harrison/images/home-finance-service-bg.jpg')); ?>&quot;); visibility: visible; animation-name: fadeIn;">
    <div class="container xs-no-padding-lr">
        <div class="row justify-content-center justify-content-lg-end">
            <div class="col-12 col-xl-7 col-lg-7 col-md-9 col-sm-11">
                <div class="text-center bg-white box-shadow-large border-radius-6px padding-3-rem-tb padding-3-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                    <h5 class="alt-font text-dark-charcoal font-weight-700 text-uppercase letter-spacing-minus-1px margin-40px-bottom w-80 mx-auto xs-w-100">CONTACT INFO</h5>
                    
                    <!-- start contact form -->
                    <ul class="icon-list">
                        <li><i class="fab ti-location-pin"></i> 13 & 14, Central Market, Punjabi Bagh (West), New Delhi-110026</li>
                        <li><i class="fab line-icon-Phone-2"></i> +91 114 576 1101 -10 ( 10 lines)</li>
                        <li><i class="fab line-icon-Email"></i> info@harrisonlocks.com</li>
                    </ul>
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.6213687680392!2d77.13164751508346!3d28.671053682402665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a4e5c1bd4d%3A0x4e54092bb285b3e1!2sHarrison%20Locks!5e0!3m2!1sen!2sin!4v1655368891384!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="big-section wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-six-bottom">
                <h6 class="alt-font text-extra-dark-gray font-weight-500">Enquiry</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <form id="project-contact-form" class="needs-validation" method="Post" action="<?php echo e(route('front.contact.submit')); ?>" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                            <input class="form-control margin-25px-bottom" name="name" type="text" id="name" placeholder="<?php echo e(__('Your Name')); ?>"  value="<?php echo e(old('name')); ?>" required>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input class="form-control margin-25px-bottom" type="email" name="email" id="contact-email" placeholder="<?php echo e(__('Your E-mail address')); ?>"  value="<?php echo e(old('email')); ?>" required>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input class="form-control mb-0" type="text" name="phone" id="contact-tel" placeholder="<?php echo e(__('Your Mobile')); ?>"  value="<?php echo e(old('phone')); ?>" required>
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                            <textarea class="form-control medium-textarea bg-white h-200px" rows="6" name="comment" placeholder="<?php echo e(__('Write your message here...')); ?>"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php if($setting->recaptcha == 1): ?>
                        <div class="col-lg-12 mb-4">
                            <?php echo NoCaptcha::renderJs(); ?>

                            <?php echo NoCaptcha::display(); ?>

                            <?php if($errors->has('g-recaptcha-response')): ?>
                            <?php
                                $errmsg = $errors->first('g-recaptcha-response');
                            ?>
                            <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <div class="col text-left sm-margin-20px-bottom">
                            <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-10px-right margin-5px-top required" required>
                            <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms &amp; conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                        </div>
                        <div class="col text-center text-md-right">
                            <input type="hidden" name="redirect" value="">
                            <button id="project-contact-us-button" class="btn btn-medium btn-fancy btn-gradient-sky-blue-pink mb-0" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>





<section class="big-section gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-six-bottom">
                <h6 class="alt-font text-extra-dark-gray font-weight-500">Our clients</h6>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 client-logo-style-01 align-items-center">
            <!-- start client logo item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-35.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-37.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-33.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-38.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center md-margin-30px-bottom sm-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-39.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center md-margin-30px-bottom sm-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-34.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center xs-margin-15px-bottom">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-40.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <div class="col text-center">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="<?php echo e(asset('assets/harrison/images/client-logo-36.png')); ?>" alt="" data-no-retina=""></a>
                </div>
            </div>
            <!-- end client logo item -->
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/front/forms/contact-us.blade.php ENDPATH**/ ?>