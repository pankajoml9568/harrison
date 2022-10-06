@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Contact')}}
@endsection

@section('content')
 <!-- Page Title-->
@include('includes.title', ['banner' => '', 'title'=>'Career with us'])

  @include('includes.alert')

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
                                            
                                            <form class="row mt-2 needs-validation" method="Post" action="{{route('form.career.submit')}}" enctype="multipart/form-data" novalidate>
                                                @csrf
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="name" type="text" id="name" placeholder="{{__('Full Name *')}}"  value="{{ old('name') }}" required>
                                                        @error('name')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="email" name="email" id="contact-email" placeholder="{{__('E-mail address *')}}"  value="{{ old('email') }}" required>
                                                        @error('email')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="mobile" id="contact-tel" placeholder="{{__('Mobile Number *')}}"  value="{{ old('mobile') }}" required>
                                                        @error('phone')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="date" name="dob" id="contact-dob" placeholder="{{__('Date of Birth *')}}"  value="{{ old('dob') }}" required>
                                                        @error('dob')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                            <select class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="gender" id="contact-gender" required>
                                                                <option value="">--- Gender *---</option>
                                                                <option {{ old('gender') == "Male" ? "selected" : "" }} value="Male">Male</option>
                                                                <option {{ old('gender') == "Female" ? "selected" : "" }} value="Female">Female</option>
                                                                
                                                            </select>
                                                        @error('gender')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                            <select class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="country" id="contact-country" required>
                                                                <option value="">--- Country *---</option>
                                                                <option {{ old('country') == "India" ? "selected" : "" }} value="India">India</option>
                                                                
                                                            </select>
                                                        @error('country')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="state" id="contact-state" placeholder="{{__('State *')}}"  value="{{ old('state') }}" required>
                                                        @error('state')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="city" id="contact-city" placeholder="{{__('City *')}}"  value="{{ old('city') }}" required>
                                                        @error('city')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="apply_for" id="contact-apply_for" placeholder="{{__('Apply For *')}}"  value="{{ old('apply_for') }}" required>
                                                        @error('apply_for')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                            <select class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" name="highest_education" id="contact-highest_education" required>
                                                                <option value="">--- Highest Education *---</option>
                                                                <option {{ old('highest_education') == "12th" ? "selected" : "" }} value="12th">12th</option>
                                                                
                                                            </select>
                                                        @error('highest_education')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="total_experince" id="contact-total_experince" placeholder="{{__('Total Experience *')}}"  value="{{ old('total_experince') }}" required>
                                                        @error('total_experince')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="prefered_location" id="contact-prefered_location" placeholder="{{__('Prefered Location *')}}"  value="{{ old('prefered_location') }}" required>
                                                        @error('prefered_location')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="current_designation" id="contact-current_designation" placeholder="{{__('Current Designation *')}}"  value="{{ old('current_designation') }}" required>
                                                        @error('current_designation')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="current_employer" id="contact-current_employer" placeholder="{{__('Current Employer *')}}"  value="{{ old('current_employer') }}" required>
                                                        @error('current_employer')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input class="form-control input-border-bottom border-color-black-transparent bg-transparent px-0 border-radius-0px" type="text" name="current_annual_ctc" id="contact-current_annual_ctc" placeholder="{{__('Current Annual CTC *')}}"  value="{{ old('current_annual_ctc') }}" required>
                                                        @error('current_annual_ctc')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file" name="resume" id="resume">
                                                        @error('resume')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12"></div>
                                                @if ($setting->recaptcha == 1)
                                                <div class="col-lg-12 mb-4">
                                                    {!! NoCaptcha::renderJs() !!}
                                                    {!! NoCaptcha::display() !!}
                                                    @if ($errors->has('g-recaptcha-response'))
                                                    @php
                                                        $errmsg = $errors->first('g-recaptcha-response');
                                                    @endphp
                                                    <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                                                    @endif
                                                </div>
                                                @endif


                                                <div class="col-12 text-right">
                                                    <!-- Show toastr after succesfull submit -->
                                                    <button class="btn btn-large btn-dark-gray d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr" type="submit"><span>{{ __('Send message') }}<i class="feather icon-feather-send right-icon"></i></span></button>
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
@endsection
