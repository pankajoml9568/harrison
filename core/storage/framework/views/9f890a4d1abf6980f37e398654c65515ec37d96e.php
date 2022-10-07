
<?php $__env->startSection('meta'); ?>
<meta name="keywords" content="<?php echo e($setting->meta_keywords); ?>">
<meta name="description" content="<?php echo e($setting->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!-- Page Title-->
<?php echo $__env->make('includes.title', ['banner' => '', 'title'=>'Career with us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Page Content-->
  <section class="bg-light-gray career">
            <div class="container">
                <div class="row justify-content-center wow animate__fadeIn">
                    <div class="col-12 col-lg-8 col-sm-10 text-center margin-5-rem-bottom md-margin-3-rem-bottom xs-margin-5-rem-bottom">
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block">Current Opening(s)</h5>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 col-md-10">
                        <div class="panel-group accordion-event accordion-style-03" id="accordion3" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="panel-heading active-accordion">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#accordion-style-03-01" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500 fnt-20">Business Development Manager/ Area sales Manager</span>
                                            <i class="indicator fas fa-angle-down text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-01" class="panel-collapse collapse show" data-parent="#accordion3">
                                    <div class="panel-body">
                                        <b>Key Responsibilities</b>
                                          <ul class="list-style-02 mt15 ">
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Male candidates with minimum 5 years of experience in the FMCG with good communication skills and pleasant personality. 
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Capable to work with locks & hardware industry and institutional sales experience. 
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Capable of achieving the desired target as set out by the time to time. 
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Should be able to explore and establish new distribution network in newer areas. 
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Remunerations matching as per industry standards.  
                                            </li>                                                    
                                          </ul>

                                        
                                        <a class="btn btn-medium btn-medium btn-round-edge btn-fast-blue popup-with-zoom-anim" href="#modal-popup2">Apply Now</a>
                                        <!-- start modal pop-up -->
                                        <div id="modal-popup2" class="zoom-anim-dialog col-11 col-xl-6 col-lg-6 col-md-8 col-sm-9 mx-auto bg-white text-center modal-popup-main padding-2-half-rem-all mfp-hide border-radius-6px sm-padding-2-half-rem-lr">
                                            
                                            <form class="row mt-2" method="Post" action="<?php echo e(route('form.career.submit')); ?>" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="name"><?php echo e(__('Full Name')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="name" type="text" id="name" placeholder="<?php echo e(__('Full Name')); ?>"  value="<?php echo e(old('name')); ?>">
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
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-email"><?php echo e(__('E-mail address')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="email" name="email" id="contact-email" placeholder="<?php echo e(__('E-mail address')); ?>"  value="<?php echo e(old('email')); ?>">
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
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-tel"><?php echo e(__('Mobile Number')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="mobile" id="contact-tel" placeholder="<?php echo e(__('Mobile Number')); ?>"  value="<?php echo e(old('mobile')); ?>">
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
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-dob"><?php echo e(__('Date of Birth')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="date" name="dob" id="contact-dob" placeholder="<?php echo e(__('Date of Birth')); ?>"  value="<?php echo e(old('dob')); ?>">
                                                        <?php $__errorArgs = ['dob'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-gender"><?php echo e(__('Gender')); ?></label>
                                                            <select class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="gender" id="contact-gender">
                                                                <option value="">--- Gender ---</option>
                                                                <option <?php echo e(old('gender') == "Male" ? "selected" : ""); ?> value="Male">Male</option>
                                                                <option <?php echo e(old('gender') == "Female" ? "selected" : ""); ?> value="Female">Female</option>
                                                                
                                                            </select>
                                                        <?php $__errorArgs = ['gender'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-country"><?php echo e(__('Country')); ?></label>
                                                            <select class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="country" id="contact-country">
                                                                <option value="">--- Country ---</option>
                                                                <option <?php echo e(old('country') == "India" ? "selected" : ""); ?> value="India">India</option>
                                                                
                                                            </select>
                                                        <?php $__errorArgs = ['country'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-state"><?php echo e(__('State')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="state" id="contact-state" placeholder="<?php echo e(__('State')); ?>"  value="<?php echo e(old('state')); ?>">
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-city"><?php echo e(__('City')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="city" id="contact-city" placeholder="<?php echo e(__('City')); ?>"  value="<?php echo e(old('city')); ?>">
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-apply_for"><?php echo e(__('Resume Description')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="apply_for" id="contact-apply_for" placeholder="<?php echo e(__('Apply For')); ?>"  value="<?php echo e(old('apply_for')); ?>">
                                                        <?php $__errorArgs = ['apply_for'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-highest_education"><?php echo e(__('Highest Education')); ?></label>
                                                            <select class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="highest_education" id="contact-highest_education">
                                                                <option value="">--- Highest Education ---</option>
                                                                <option <?php echo e(old('highest_education') == "12th" ? "selected" : ""); ?> value="12th">12th</option>
                                                                
                                                            </select>
                                                        <?php $__errorArgs = ['highest_education'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-total_experince"><?php echo e(__('Total Experience')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="total_experince" id="contact-total_experince" placeholder="<?php echo e(__('Total Experience')); ?>"  value="<?php echo e(old('total_experince')); ?>">
                                                        <?php $__errorArgs = ['total_experince'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-prefered_location"><?php echo e(__('Prefered Location')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="prefered_location" id="contact-prefered_location" placeholder="<?php echo e(__('Prefered Location')); ?>"  value="<?php echo e(old('prefered_location')); ?>">
                                                        <?php $__errorArgs = ['prefered_location'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-current_designation"><?php echo e(__('Current Designation')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="current_designation" id="contact-current_designation" placeholder="<?php echo e(__('Current Designation')); ?>"  value="<?php echo e(old('current_designation')); ?>">
                                                        <?php $__errorArgs = ['current_designation'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-current_employer"><?php echo e(__('Current Employer')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="current_employer" id="contact-current_employer" placeholder="<?php echo e(__('Current Employer')); ?>"  value="<?php echo e(old('current_employer')); ?>">
                                                        <?php $__errorArgs = ['current_employer'];
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

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="contact-current_annual_ctc"><?php echo e(__('Current Annual CTC')); ?></label>
                                                        <input class="input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="current_annual_ctc" id="contact-current_annual_ctc" placeholder="<?php echo e(__('Current Annual CTC')); ?>"  value="<?php echo e(old('current_annual_ctc')); ?>">
                                                        <?php $__errorArgs = ['current_annual_ctc'];
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
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <label for="resume"><?php echo e(__('Attech Resume')); ?></label>
                                                        <input type="file" class="form-control-file" name="resume" id="resume">
                                                        <?php $__errorArgs = ['resume'];
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

                                                <div class="col-12"></div>
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


                                                <div class="col-12 text-right">
                                                    <!-- Show toastr after succesfull submit -->
                                                    <button class="btn btn-large btn-dark-gray d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" type="submit"><span><?php echo e(__('Send message')); ?><i class="feather icon-feather-send right-icon"></i></span></button>
                                                </div>
                                          </form>
                                      </div>
                        <!-- end modal pop-up -->
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#accordion-style-03-02" aria-expanded="false">
                                        <div class="panel-title">
                                        <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500 fnt-20">Sales Executive</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-02" class="panel-collapse collapse" data-parent="#accordion3">
                                    <div class="panel-body">
                                        <b>Key Responsibilities</b>
                                          <ul class="list-style-02 mt15 ">
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Looking for young, self-motivated graduates with 3-4 years of experience.
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Willingness to travel, ability to work in locks industry.
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Expertise in channel management and new market development, dealer/distributor network management.
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Person with passion and is energetic with 3 to 4 years of experience. 
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Extensively capable to work with locks & hardware industry and institutional sales experience.
                                            </li>                                                    
                                          </ul>

                                        
                                        <a class="btn btn-medium btn-medium btn-round-edge btn-fast-blue popup-with-zoom-anim" href="#modal-popup2">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#accordion-style-03-03" aria-expanded="false">
                                        <div class="panel-title">
                                        <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500 fnt-20">Technical Executive</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-03" class="panel-collapse collapse" data-parent="#accordion3">
                                    <div class="panel-body">
                                    <b>Key Responsibilities</b>
                                          <ul class="list-style-02 mt15 ">
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Young graduate with minimum 4-5 years of experience.
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    We are looking for person with a B-Tech degree or 3 years diploma holders (Mechanical or Electrical)
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Understanding of hardware/locks industry 
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Skilled technical person with hands on experience in hardware/locks industry 
                                            </li>                                                    
                                          </ul>

                                        
                                        <a class="btn btn-medium btn-medium btn-round-edge btn-fast-blue popup-with-zoom-anim" href="#modal-popup2">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#accordion-style-03-03" aria-expanded="false">
                                        <div class="panel-title">
                                        <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500 fnt-20">Tele Callers</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-03" class="panel-collapse collapse" data-parent="#accordion4">
                                    <div class="panel-body">
                                    <b>Key Responsibilities</b>
                                          <ul class="list-style-02 mt15 ">
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Young Graduate, having good communication skills, freshers can also apply.
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Candidate should be confident with excellent interpersonal skills and personality
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Candidate can work as a team and support colleagues in achieving organisational goals
                                            </li>                                                    
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Candidate should be able to make calls and answer questions of clients efficiently
                                            </li> 
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Candidate should be able to speak minimal English
                                            </li> 
                                            <li class="margin-20px-bottom">
                                              <i class="feather icon-feather-arrow-right-circle text-large text-fast-blue position-relative margin-10px-right" aria-hidden="true"></i>
                                                    Candidate should have passed school & enrol into a bachelor’s degree or so on
                                            </li>                                                    
                                          </ul>

                                        
                                        <a class="btn btn-medium btn-medium btn-round-edge btn-fast-blue popup-with-zoom-anim" href="#modal-popup2">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>

                
                
            </div>
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\www\harrison\core\resources\views/front/forms/career.blade.php ENDPATH**/ ?>