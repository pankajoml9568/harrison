
<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
<?php echo e(__('Become a Harrison Associate')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Title-->

<?php echo $__env->make('includes.title', ['banner' => '', 'title'=>'Become a Harrison Associate'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page Content-->
<!-- start section -->
        <section class="pb-md-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center overlap-gap-section overlap-height">
                        <img src="<?php echo e(asset('assets/harrison/images/who-we-are-image-2.jpg')); ?>"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 overlap-section overflow-visible wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center sm-no-margin-lr">
                    <div class="col-12 col-lg-11 box-shadow-medium bg-white align-items-center justify-content-center padding-6-rem-all md-padding-3-rem-all">
                        <div class="row align-items-center justify-content-center mx-lg-0">
                            <div class="col-12 col-md-6 fancy-text-box-style-01 text-center text-md-left md-margin-50px-bottom sm-margin-40px-tb">
                                <div class="fancy-text-box padding-3-half-rem-all md-padding-4-rem-all xs-padding-30px-all">
                                    <div class="fancy-text-box-border-left border-color-fast-blue"></div>
                                    <h1 class="alt-font fancy-text-content font-weight-600 text-extra-dark-gray d-inline-block align-middle letter-spacing-minus-5px xs-padding-30px-tb">500 +</h1>
                                    <div class="alt-font text-extra-medium text-extra-dark-gray text-left d-inline-block align-middle w-90px mx-auto line-height-20px position-relative top-minus-4px">Architects & Interior Designers</div>
                                    <div class="fancy-text-box-border-right border-color-fast-blue"></div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 col-md-6 col-sm-11 text-center text-md-left sm-margin-20px-tb">
                                <span class="alt-font d-block margin-15px-bottom">Most of the businesses or individuals trust experts certified by a brand</span>
                                <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom  sm-margin-20px-bottom">Become a <span style="font-weight:600;">Harrison</span> Associate</h5>
                                <p class="margin-40px-bottom sm-margin-30px-bottom">Harrison respects talent and is always committed to providing the right platform for people who love their work and who are dedicated to quality/ timeliness and commitments made to the consumer.</p>
                                <a href="contact-us-simple.html" class="btn btn-small btn-dark-gray">Become a partner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="padding-80px-top sm-padding-50px-top wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 px-lg-0">
                        <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                            <!-- start feature box item -->
                            <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <div class="feature-box h-100 feature-box-left-icon feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Crown icon-medium text-fast-blue"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Get an Edge</span>
                                        <p>You will be able to connect with new clients looking for an architect/Interior designer in your region. Appear in Harrison's search and get an opportunity to be hired by brands & individuals.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-extra-dark-gray"></div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="feature-box h-100 feature-box-left-icon feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Cube-Molecule icon-medium text-fast-blue"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Increased Branding</span>
                                        <p>Your association with the Harrison brand helps in creating better branding for yourself in your region and also helps in you being recognised as a professional.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-extra-dark-gray"></div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <div class="feature-box h-100 feature-box-left-icon feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Sand-watch2 icon-medium text-fast-blue"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Direct Customers</span>
                                        <p>People who search for Interior designers or Architects on our website have either started their projects already or are almost ready to begin. This reduces your communication and conversion cycle.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-extra-dark-gray"></div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col col-md-9 wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="feature-box h-100 feature-box-left-icon feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Gear-2 icon-medium text-fast-blue"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">It's Free</span>
                                        <p>Harrison does not ask you for any fees or registration charges. It's all about your credentials and how efficiently you have been working with your current customers. There may be reference/ credential verifications before you are enrolled.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-extra-dark-gray"></div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we’ll be in touch soon!</span>
                                <h4 class="alt-font font-weight-600 text-extra-dark-gray">Become a Harrison Associate</h4>
                            </div>
                            <div class="col-12">
                                <!-- start contact form -->
                                <form class="row mt-2" method="Post" action="<?php echo e(route('form.become-a-associate.save')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="medium-input bg-white" name="first_name" type="text" id="first-name"
                                                placeholder="<?php echo e(__('First Name')); ?>" value="<?php echo e(old('first_name')); ?>">
                                            <?php $__errorArgs = ['first_name'];
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="medium-input bg-white" name="last_name" type="text" id="last-name"
                                                placeholder="<?php echo e(__('Last Name')); ?>" value="<?php echo e(old('last_name')); ?>">
                                            <?php $__errorArgs = ['last_name'];
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="medium-input bg-white" type="email" name="email" id="contact-email"
                                                placeholder="<?php echo e(__('E-mail')); ?>" value="<?php echo e(old('email')); ?>">
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
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="medium-input bg-white" type="text" name="phone" id="contact-tel"
                                                placeholder="<?php echo e(__('Phone')); ?>" value="<?php echo e(old('phone')); ?>">
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
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="medium-input bg-white" type="text" name="state" id="contact-state"
                                                placeholder="<?php echo e(__('State')); ?>" value="<?php echo e(old('state')); ?>">
                                            <?php $__errorArgs = ['state'];
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
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="medium-input bg-white" type="text" name="city" id="contact-city"
                                                placeholder="<?php echo e(__('City')); ?>" value="<?php echo e(old('city')); ?>">
                                            <?php $__errorArgs = ['city'];
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
                                    </div>


                                    <div class="col-12  ">
                                        <div class="form-group">
                                            <select class="" name="i_am_a" id="i_am_a">
                                                <option <?php echo e(old('i_am_a') == "Architect" ? "selected" : ""); ?> value="Architect">Architect</option>
                                                <option <?php echo e(old('i_am_a') == "Interior designer" ? "selected" : ""); ?> value="Interior designer">Interior designer</option>
                                                <option <?php echo e(old('i_am_a') == "Contractor" ? "selected" : ""); ?> value="Contractor">Contractor</option>
                                            </select>
                                            <?php $__errorArgs = ['i_am_a'];
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

                                    <div class="col text-left sm-margin-30px-bottom">
                                        <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="coming-soon.php" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                    </div>

                                    <div class="col-12 text-right">
                                        <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0" type="submit"><?php echo e(__('Send message')); ?></button>
                                    </div>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\projects\harrison\core\resources\views/front/forms/become-a-associate.blade.php ENDPATH**/ ?>