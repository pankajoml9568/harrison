@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
{{__('Become a Harrison Associate')}}
@endsection

@section('content')
<!-- Page Title-->

@include('includes.title', ['banner' => '', 'title'=>'Become a Harrison Associate'])

@include('includes.alert')

<!-- Page Content-->
<!-- start section -->
        <section class="pb-md-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center overlap-gap-section overlap-height">
                        <img src="{{ asset('assets/harrison/images/who-we-are-image-2.jpg') }}"/>
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
                                <a href="{{ url('become-a-dealer/#dealerform') }}" class="btn btn-small btn-dark-gray">Become a partner</a>
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
                                <form class="row mt-2 needs-validation" method="Post" action="{{route('form.become-a-associate.save')}}" novalidate>
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control medium-input bg-white" name="first_name" type="text" id="first-name"
                                                placeholder="{{__('First Name *')}}" value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control medium-input bg-white" name="last_name" type="text" id="last-name"
                                                placeholder="{{__('Last Name')}}" value="{{ old('last_name') }}">
                                            @error('last_name')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control medium-input bg-white" type="email" name="email" id="contact-email"
                                                placeholder="{{__('E-mail *')}}" value="{{ old('email') }}" required>
                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control medium-input bg-white" type="text" name="phone" id="contact-tel"
                                                placeholder="{{__('Phone *')}}" value="{{ old('phone') }}" required>
                                            @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control medium-input bg-white" type="text" name="state" id="contact-state"
                                                placeholder="{{__('State *')}}" value="{{ old('state') }}" required>
                                            @error('state')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control medium-input bg-white" type="text" name="city" id="contact-city"
                                                placeholder="{{__('City *')}}" value="{{ old('city') }}" required>
                                            @error('city')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-12  ">
                                        <div class="form-group">
                                            <select class="form-control" name="i_am_a" id="i_am_a" required>
                                                <option {{ old('i_am_a') == "Architect" ? "selected" : "" }} value="Architect">Architect</option>
                                                <option {{ old('i_am_a') == "Interior designer" ? "selected" : "" }} value="Interior designer">Interior designer</option>
                                                <option {{ old('i_am_a') == "Contractor" ? "selected" : "" }} value="Contractor">Contractor</option>
                                            </select>
                                            @error('i_am_a')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

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

                                    <div class="col text-left sm-margin-30px-bottom">
                                        <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="coming-soon.php" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                    </div>

                                    <div class="col-12 text-right">
                                        <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0" type="submit">{{ __('Send message') }}</button>
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
@endsection
