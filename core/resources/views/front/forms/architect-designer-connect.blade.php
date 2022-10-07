@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
{{__('Become a Dealer')}}
@endsection

@section('content')
 <!-- Page Title-->
@include('includes.title', ['banner' => '', 'title'=>'Harrison Architect/ Interior Designer Search'])

@include('includes.alert')

<section class="cover-background big-section xs-no-padding-tb xs-border-tb border-color-medium-gray wow animate__fadeIn bg2-b" style="animation-name: fadeIn;">
    <div class="container xs-no-padding-lr">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 text-center margin-7-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <span class="alt-font font-weight-500 text-uppercase d-block margin-10px-bottom">Search</span>
                <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray letter-spacing-minus-1px m-0">More collaboration. Fewer complications. Better outcomes.</h5>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-end">
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="bg-white box-shadow-large border-radius-6px padding-3-rem-tb padding-3-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                    <div class="row align-items-center justify-content-center mx-lg-0">
                        <div class="col-12 col-xl-12 col-md-6 col-sm-11 sm-margin-20px-tb">
                            <h5 class="alt-font text-extra-dark-gray font-weight-500 text-center"><span class="font-weight-600">Search for an Architect/ Interior Designer</span></h5>
                            <p class="">Harrison's architect/ Interior designer connect feature makes collaboration easy by streamlining workflows & enhancing project efficiency.</p>
                            <p class="">Streamlined search process with options to connect with experts from your region</p>
                            <p class="">Ability to interact with multiple experts before you decide the best one that suits you.</p>
                            <p class="mb-0"> Reduced timeline and no strain of quality & commitment issues.</p>
                            <!-- <a href="#" class="btn btn-small btn-dark-gray">DISCOVER VISUALIZER</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="bg-white box-shadow-large border-radius-6px padding-3-rem-tb padding-3-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                    <form id="project-contact-form" method="Post" action="{{route('form.architect-designer-connect.save')}}">
                    @csrf
                        <!-- <div class="row row-cols-1 row-cols-md-2"> -->
                        <div class="">
                            <!-- <div class="col margin-4-rem-bottom sm-margin-25px-bottom"> -->
                                <input class="medium-input bg-white required" name="name" type="text" id="name"
                            placeholder="{{__('Your Name')}}" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror

                                <input class="medium-input bg-white required" type="email" name="email" id="email"
                            placeholder="{{__('Your E-mail address')}}" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror

                                <input class="medium-input bg-white " type="text" name="state" id="contact-state"
                            placeholder="{{__('State')}}" value="{{ old('state') }}">
                            @error('state')
                                <p class="text-danger">{{$message}}</p>
                            @enderror

                                <input class="medium-input bg-white " type="text" name="city" id="contact-city"
                            placeholder="{{__('City')}}" value="{{ old('city') }}">
                            @error('city')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <!-- </div> -->
                            <!-- <div class="col margin-4-rem-bottom sm-margin-20px-bottom"> -->
                                <select class="select">
                                    <option value="">Design/Plans</option>
                                    <option {{ old('design_plans') == "Permits" ? "selected" : "" }} value="Permits">Permits</option>
                                    <option {{ old('design_plans') == "Construction Managment" ? "selected" : "" }} value="Construction Managment">Construction Managment</option>
                                    <option {{ old('design_plans') == "Consulting" ? "selected" : "" }} value="Consulting">Consulting</option>
                                </select>
                                @error('design_plans')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            <!-- </div> -->
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
                            <div class="col text-left sm-margin-20px-bottom" style="margin-bottom:23px">
                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-10px-right margin-5px-top required">
                                <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms &amp; conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                            </div>
                            <div class="col text-center text-md-right mt-2">
                                <button id="project-contact-us-button" class="btn btn-medium btn-fancy btn-gradient-sky-blue-pink mb-0" type="submit">Register Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection