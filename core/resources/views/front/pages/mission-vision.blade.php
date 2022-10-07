@extends('master.front')

@section('title')
Our mission and Vission
@endsection

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
@endsection

@section('content')
<!-- Page Title-->
@include('includes.title', ['banner' => '', 'title'=>'Our mission and Vission'])

<!-- Harrison theme start -->

<!-- start  section -->
<section class="wow pb-0 bg3-c">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-5 col-lg-6 padding-3-rem-bottom lg-padding-7-rem-bottom sm-padding-50px-bottom">
                <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-5-half-rem-bottom">OUR VISION</h5>
                <!-- <div class="text-extra-medium margin-20px-bottom alt-font">Browse amazing social media features</div> -->
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12">
                        <div class="feature-box feature-box-left-icon">
                            <!-- <div class="feature-box-icon">
                                        <i class="line-icon-Idea-5 icon-large text-fast-blue"></i>
                                    </div> -->
                            <div class="feature-box-content last-paragraph-no-margin">
                                <!-- <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Daily workshops</span> -->
                                <p class="w-95">Vision without action is merely a dream. Action without vision just passes the time. Vision with action can change the world.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <div class="col-12">
                        <div class="margin-20px-tb w-100 xs-margin-30px-tb"></div>
                    </div>
                    <!-- start feature box item -->
                    <div class="col-12">
                        <div class="feature-box feature-box-left-icon">
                            <!-- <div class="feature-box-icon">
                                        <i class="line-icon-Medal-2 icon-large text-fast-blue"></i>
                                    </div> -->
                            <div class="feature-box-content last-paragraph-no-margin">
                                <!-- <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Unlimited layouts and styles</span> -->
                                <p class="w-95">HARRISON strives to be a trustworthy company, one of the best in
                                    security & door hardware segments and a preferred partner in all door, furniture,
                                    wardrobe, kitchen hardware & security solution segments. We also aim to be a
                                    forward- looking company, One that promotes a great working environment and
                                    reliability for all our partners in success.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-xl-1 align-self-end text-center text-xl-left">
                <img src="{{ asset('assets/harrison/images/who-we-are-image-1.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="position-relative pb-0 overflow-visible wow animate__fadeIn pb-5 mb-0 bg1-a" data-wow-delay="0.4s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 margin-70px-top lg-margin-30px-top md-margin-50px-bottom">
                <div class="w-70 border-radius-6px overflow-hidden position-relative">
                    <img src="{{ asset('assets/harrison/images/our-process-02.jpg') }}" alt="" />
                    <div class="opacity-extra-medium bg-gradient-sky-blue-pink"></div>
                </div>
                <div class="position-absolute right-15px bottom-0px w-70" data-parallax-layout-ratio="1.1">
                    <img class="border-radius-6px" src="images/our-process-01.jpg" alt="" />
                </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <!-- <div class="alt-font text-extra-medium font-weight-500 margin-30px-bottom"><span class="w-30px h-1px bg-fast-blue d-inline-block align-middle margin-20px-right"></span><span class="text-fast-blue d-inline-block">Looking for interface expertise?</span></div> -->
                <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom w-95">OUR MISSION</h5>
                <p class="w-95"><strong>"The secret of success is consistency"</strong></p>
                <p class="w-95">Rapid globalization of our business in order to enrich the quality of life keeps
                    Harrison's R&D department always ready to introduce their new series of the world class, modern,
                    sleek and trendylooksyet strong and sturdy with safety feature products time to time that matches
                    international specifications and standard at affordable prices. The following important pillars at
                    which our company is based.</p>
                <ul class="ml-3 text-black">
                    <li>TRUST</li>
                    <li>RELIABILITY AND INTEGRITY</li>
                    <li>CUSTOMER SERVICE & SATISFACTION</li>
                    <li>VALUE FOR MONEY</li>
                </ul>
                <!-- <div class="btn-dual margin-15px-top d-inline-block"><a href="about-us.html" class="btn btn-medium btn-dark-gray btn-slide-right-bg">Discover Litho<span class="bg-white"></span></a><a href="about-me.html" class="btn btn-medium btn-transparent-dark-gray btn-slide-right-bg">Read More<span class="bg-extra-dark-gray"></span></a></div> -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection