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
@include('includes.title', ['banner' => '', 'title'=>'Contact Us'])

@include('includes.alert')

<!-- Page Content-->
<section class="cover-background big-section xs-no-padding-tb xs-border-tb border-color-medium-gray wow animate__fadeIn"
    style="background-image: url(&quot;{{ asset('assets/harrison/images/home-finance-service-bg.jpg') }}&quot;); visibility: visible; animation-name: fadeIn;">
    <div class="container xs-no-padding-lr">
        <div class="row justify-content-center justify-content-lg-end">
            <div class="col-12 col-xl-7 col-lg-7 col-md-9 col-sm-11">
                <div
                    class="text-center bg-white box-shadow-large border-radius-6px padding-3-rem-tb padding-3-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                    <h5
                        class="alt-font text-dark-charcoal font-weight-700 text-uppercase letter-spacing-minus-1px margin-40px-bottom w-80 mx-auto xs-w-100">
                        CONTACT INFO</h5>

                    <!-- start contact form -->
                    <div class="contact_detail">
                        <ul class="icon-list">
                            <li><i class="fab ti-location-pin"></i>13 & 14, Central Market, Punjabi Bagh (West), <br>New Delhi - 110026</li>
                            <li><i class="fab line-icon-Phone-2"></i>+91 114 576 1101 - 10 (10 lines)</li>
                            <li><i class="fab line-icon-Email"></i><a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a></li>
                        </ul>
                     </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.6213687680392!2d77.13164751508346!3d28.671053682402665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03a4e5c1bd4d%3A0x4e54092bb285b3e1!2sHarrison%20Locks!5e0!3m2!1sen!2sin!4v1655368891384!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="big-section wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h6 class="alt-font text-extra-dark-gray font-weight-500">Enquiry</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <form id="project-contact-form" class="needs-validation" method="Post" action="{{route('front.contact.submit')}}" novalidate>
                    @csrf
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                            <input class="form-control margin-25px-bottom" name="name" type="text" id="name" placeholder="{{__('Your Name *')}}"  value="{{ old('name') }}" required>
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input class="form-control margin-25px-bottom" type="email" name="email" id="contact-email" placeholder="{{__('Your E-mail address *')}}"  value="{{ old('email') }}" required>
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input class="form-control mb-0" type="text" name="phone" id="contact-tel" placeholder="{{__('Your Mobile *')}}"  value="{{ old('phone') }}" required>
                            @error('phone')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                            <textarea class="form-control medium-textarea bg-white h-200px" rows="6" name="comment" placeholder="{{__('Write your message here...')}}">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
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

<section class="big-section" style="background:#f7f7f7">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-two-bottom">
                <h6 class="alt-font text-extra-dark-gray font-weight-500">Our clients</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="logos">
                    <ul>
                        <li><img src="{{ asset('assets/harrison/images/clients/delhi-metro-rail-corporation-logo.jpg') }}"
                                data-no-retina=""></li>
                        <li><img src="{{ asset('assets/harrison/images/clients/nbcc-logo.jpg') }}" data-no-retina="">
                        </li>
                        <li><img src="{{ asset('assets/harrison/images/clients/dlf.jpg') }}" data-no-retina=""></li>
                        <li><img src="{{ asset('assets/harrison/images/clients/aace.jpg') }}" data-no-retina=""></li>
                        <li><img src="{{ asset('assets/harrison/images/clients/harvest-gold.jpg') }}" data-no-retina="">
                        </li>
                        <li><img src="{{ asset('assets/harrison/images/clients/fci.jpg') }}" data-no-retina=""></li>
                        <li><img src="{{ asset('assets/harrison/images/clients/hyper-city.jpg') }}" data-no-retina="">
                        </li>
                        <li><img src="{{ asset('assets/harrison/images/clients/tdi-creating.jpg') }}" data-no-retina="">
                        </li>
                        <li><img src="{{ asset('assets/harrison/images/clients/gaurs.jpg') }}" data-no-retina=""></li>
                        <li><img src="{{ asset('assets/harrison/images/clients/walmart.jpg') }}" data-no-retina=""></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 text-center">
                <a href="our-client.php" class="btn btn-small btn-dark-gray uppercase mt50">View All</a>
            </div>
        </div>
    </div>
</section>
@endsection
