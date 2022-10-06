
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
@if (url()->current() == route('front.index'))
<title>@yield('hometitle')</title>
@else
<title>{{$setting->title}} -@yield('title')</title>
@endif

<!-- SEO Meta Tags-->
@yield('meta')
<meta name="author" content="{{$setting->title}}">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="167x167" href="{{asset('assets/images/'.$setting->favicon)}}">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{asset('assets/front/css/plugins.min.css')}}">

@yield('styleplugins')

<!-- Theme css-->
<!-- <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/styles.min.css')}}">

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/responsive.css')}}"> -->
<!-- End theme css -->

<!-- Harrison css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/harrison/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/harrison/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/harrison/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/harrison/css/responsive.css') }}">
<!-- Harrison -->


<!-- Color css -->
<!-- <link href="{{ asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color) }}" rel="stylesheet"> -->

<!-- Modernizr-->
<!-- <script src="{{asset('assets/front/js/modernizr.min.js')}}"></script> -->

@if (DB::table('languages')->where('is_default',1)->first()->rtl == 1)
    <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
@endif
<style>
    {{$setting->custom_css}}
</style>
{{-- Google AdSense Start --}}
@if ($setting->is_google_adsense == '1')
    {!! $setting->google_adsense !!}
@endif
{{-- Google AdSense End --}}

{{-- Google AnalyTics Start --}}
@if ($setting->is_google_analytics == '1')
    {!! $setting->google_analytics !!}
@endif
{{-- Google AnalyTics End --}}

{{-- Facebook pixel  Start --}}
@if ($setting->is_facebook_pixel == '1')
    {!! $setting->facebook_pixel !!}
@endif
{{-- Facebook pixel End --}}

</head>
<!-- Body-->
<body data-mobile-nav-style="classic">

<!-- Preloader Start -->
@if ($setting->is_loader == 1)
<div id="preloader">
    <img src="{{ asset('assets/images/'.$setting->loader) }}" alt="{{ __('Loading...') }}">
</div>
@endif

<!-- Preloader endif -->

{{--
<!-- Theme Header-->
<header class="site-header navbar-sticky">
    <div class="menu-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="t-m-s-a">
                        <a class="track-order-link" href="{{route('front.order.track')}}"><i class="icon-map-pin"></i>{{ __('Track Order') }}</a>
                        <a class="track-order-link compare-mobile d-lg-none" href="{{route('fornt.compare.index')}}">{{ __('Compare') }}</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right-area">

                        <a class="track-order-link wishlist-mobile d-inline-block d-lg-none" href="{{route('user.wishlist.index')}}"><i class="icon-heart"></i>{{ __('Wishlist') }}</a>
                        
                        <div class="t-h-dropdown ">
                            <a class="main-link" href="#">{{ __('Currency') }}<i class="icon-chevron-down"></i></a>
                            <div class="t-h-dropdown-menu">
                                @foreach (DB::table('currencies')->get() as $currency)
                                    <a class="{{Session::get('currency') == $currency->id ? 'active' : ($currency->is_default == 1 && !Session::has('currency') ? 'active' : '')}}" href="{{route('front.currency.setup',$currency->id)}}"><i class="icon-chevron-right pr-2"></i>{{$currency->name}}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="login-register ">
                            @if(!Auth::user())
                            <a class="track-order-link mr-0" href="{{route('user.login')}}">
                            {{__('Login/Register')}}
                            </a>
                            @else
                            <div class="t-h-dropdown">
                                <div class="main-link">
                                    <i class="icon-user pr-2"></i> <span class="text-label">{{Auth::user()->first_name}}</span>
                                </div>
                                <div class="t-h-dropdown-menu">
                                    <a href="{{route('user.dashboard')}}"><i class="icon-chevron-right pr-2"></i>{{ __('Dashboard') }}</a>
                                    <a href="{{route('user.logout')}}"><i class="icon-chevron-right pr-2"></i>{{ __('Logout') }}</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Topbar-->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <!-- Logo-->
                        <div class="site-branding"><a class="site-logo align-self-center" href="{{route('front.index')}}"><img src="{{asset('assets/images/'.$setting->logo)}}" alt="{{$setting->title}}"></a></div>
                        <!-- Search / Categories-->
                        <div class="search-box-wrap d-none d-lg-block d-flex">
                        <div class="search-box-inner align-self-center">
                            <div class="search-box d-flex">
                                <select name="category" id="category_select" class="categoris">
									<option value="">{{__('All')}}</option>
                                    @foreach (DB::table('categories')->whereStatus(1)->get() as $category)
                                    <option value="{{$category->slug}}">{{$category->name}}</option>
                                    @endforeach
									</select>
                                <form class="input-group" id="header_search_form" action="{{route('front.catalog')}}" method="get">
                                    <input type="hidden" name="category" value="" id="search__category">
                                    <span class="input-group-btn">
                                    <button type="submit"><i class="icon-search"></i></button>
                                    </span>
                                    <input class="form-control" type="text" data-target="{{route('front.search.suggest')}}" id="__product__search" name="search" placeholder="{{__('Search by product name')}}">
                                    <div class="serch-result d-none">
                                        <!-- search result  -->
                                    </div>
                                </form>
                            </div>
                        </div>
                            <span class="d-block d-lg-none close-m-serch"><i class="icon-x"></i></span>
                        </div>
                        <!-- Toolbar-->
                        <div class="toolbar d-flex">

                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">
                            <div>
                                <i class="icon-search"></i>
                            </div>
                            </a>
                        </div>
                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
                            <div><i class="icon-menu"></i><span class="text-label">{{__('Menu')}}</span></div>
                            </a>
                        </div>

                        <div class="toolbar-item hidden-on-mobile"><a href="{{route('fornt.compare.index')}}">
                            <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label compare_count">{{Session::has('compare') ? count(Session::get('compare')) : '0'}}</span></span><span class="text-label">{{ __('Compare') }}</span></div>
                            </a>
                        </div>
                        @if(Auth::check())
                        <div class="toolbar-item hidden-on-mobile"><a href="{{route('user.wishlist.index')}}">
                            <div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count">{{Auth::user()->wishlists->count()}}</span></span><span class="text-label">{{__('Wishlist')}}</span></div>
                            </a>
                        </div>
                        @else
                        <div class="toolbar-item hidden-on-mobile"><a href="{{route('user.wishlist.index')}}">
                          <div><span class="compare-icon"><i class="icon-heart"></i></span><span class="text-label">{{__('Wishlist')}}</span></div>
                          </a>
                      </div>
                        @endif
                        <div class="toolbar-item"><a href="{{route('front.cart')}}">
                            <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">{{Session::has('cart') ? count(Session::get('cart')) : '0'}} </span></span><span class="text-label">{{ __('Cart') }}</span></div>
                            </a>
                            <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="{{route('front.header.cart')}}">
                            @include('includes.header_cart')
                            </div>
                        </div>
                        </div>

                        <!-- Mobile Menu-->
                        <div class="mobile-menu">
                            <!-- Slideable (Mobile) Menu-->
                            <div class="mm-heading-area">
                                <h4>{{ __('Navigation') }}</h4>
                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">
                                    <a href="#">
                                        <div> <i class="icon-x"></i></div>
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation99">
                                  <span class="active" id="mmenu-tab" data-bs-toggle="tab" data-bs-target="#mmenu"  role="tab" aria-controls="mmenu" aria-selected="true">{{ __('Menu') }}</span>
                                </li>
                                <li class="nav-item" role="presentation99">
                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false">{{ __('Category') }}</span>
                                </li>

                              </ul>
                              <div class="tab-content p-0" >
                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">
                                    <nav class="slideable-menu">
                                        <ul>
                                            <li class="{{ request()->routeIs('front.index') ? 'active' : '' }}"><a href="{{route('front.index')}}"><i class="icon-chevron-right"></i>{{__('Home')}}</a></li>
                                            @if ($setting->is_shop == 1)
                                            <li class="{{ request()->routeIs('front.catalog*')  ? 'active' : '' }}"><a href="{{route('front.catalog')}}"><i class="icon-chevron-right"></i>{{__('Shop')}}</a></li>
                                            @endif
                                            @if ($setting->is_campaign == 1)
                                            <li class="{{ request()->routeIs('front.campaign')  ? 'active' : '' }}"><a href="{{route('front.campaign')}}"><i class="icon-chevron-right"></i>{{__('Campaign')}}</a></li>
                                            @endif
                                            @if ($setting->is_brands == 1)
                                            <li class="{{ request()->routeIs('front.brand')  ? 'active' : '' }}"><a href="{{route('front.brand')}}"><i class="icon-chevron-right"></i>{{__('Brand')}}</a></li>
                                            @endif

                                            @if ($setting->is_blog == 1)
                                            <li class="{{ request()->routeIs('front.blog*') ? 'active' : '' }}"><a href="{{route('front.blog')}}"><i class="icon-chevron-right"></i>{{__('Blog')}}</a></li>
                                            @endif
                                            <li class="t-h-dropdown">
                                                <a class="" href="#"><i class="icon-chevron-right"></i>{{__('Pages')}} <i class="icon-chevron-down"></i></a>
                                                <div class="t-h-dropdown-menu">
                                                    @if ($setting->is_faq == 1)
                                                    <a class="{{ request()->routeIs('front.faq*') ? 'active' : '' }}" href="{{route('front.faq')}}"><i class="icon-chevron-right pr-2"></i>{{__('Faq')}}</a>
                                                    @endif
                                                    @foreach (DB::table('pages')->wherePos(0)->orwhere('pos',2)->get() as $page)
                                                    <a class="{{request()->url() == route('front.page',$page->slug) ? 'active' : ''}} " href="{{route('front.page',$page->slug)}}"><i class="icon-chevron-right pr-2"></i>{{$page->title}}</a>
                                                    @endforeach
                                                </div>
                                            </li>

                                        @if ($setting->is_contact == 1)
                                            <li class="{{ request()->routeIs('front.contact') ? 'active' : '' }}"><a href="{{route('front.contact')}}"><i class="icon-chevron-right"></i>{{__('Contact')}}</a></li>
                                        @endif
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">
                                    <nav class="slideable-menu">
                                        @include('includes.mobile-category')

                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Navbar-->
  <div class="navbar">
        <div class="container">
            <div class="row g-3 w-100">
                <div class="col-lg-3">
                    @include('includes.categories')
                </div>
                <div class="col-lg-9 d-flex justify-content-between">
                    <div class="nav-inner">
                        <nav class="site-menu">
                            <ul>
                                <li class="{{ request()->routeIs('front.index') ? 'active' : '' }}"><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                                @if ($setting->is_shop == 1)
                                <li class="{{ request()->routeIs('front.catalog*')  ? 'active' : '' }}"><a href="{{route('front.catalog')}}">{{__('Shop')}}</a></li>
                                @endif
                                @if ($setting->is_campaign == 1)
                                <li class="{{ request()->routeIs('front.campaign')  ? 'active' : '' }}"><a href="{{route('front.campaign')}}">{{__('Campaign')}}</a></li>
                                @endif
                                @if ($setting->is_brands == 1)
                                <li class="{{ request()->routeIs('front.brand')  ? 'active' : '' }}"><a href="{{route('front.brand')}}">{{__('Brand')}}</a></li>
                                @endif
                                @if ($setting->is_blog == 1)
                                <li class="{{ request()->routeIs('front.blog*') ? 'active' : '' }}"><a href="{{route('front.blog')}}">{{__('Blog')}}</a></li>
                                @endif

                                <li class="t-h-dropdown">
                                    <a class="main-link" href="#">{{__('Pages')}} <i class="icon-chevron-down"></i></a>
                                    <div class="t-h-dropdown-menu">
                                        @if ($setting->is_faq == 1)
                                        <a class="{{ request()->routeIs('front.faq*') ? 'active' : '' }}" href="{{route('front.faq')}}"><i class="icon-chevron-right pr-2"></i>{{__('Faq')}}</a>
                                        @endif
                                        @foreach (DB::table('pages')->wherePos(0)->orwhere('pos',2)->get() as $page)
                                        <a class="{{request()->url() == route('front.page',$page->slug) ? 'active' : ''}} " href="{{route('front.page',$page->slug)}}"><i class="icon-chevron-right pr-2"></i>{{$page->title}}</a>
                                        @endforeach
                                    </div>
                                </li>

                              @if ($setting->is_contact == 1)
                                <li class="{{ request()->routeIs('front.contact') ? 'active' : '' }}"><a href="{{route('front.contact')}}">{{__('Contact')}}</a></li>
                              @endif
                            </ul>
                        </nav>

                    </div>
                    @php
                        $free_shipping = DB::table('shipping_services')->whereStatus(1)->whereIsCondition(1)->first()
                    @endphp

                </div>
            </div>
        </div>
    </div>

</header>
--}}
<!-- Page Content-->

<!-- Harrison Header -->
<header class="">
    <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-transparent header-dark fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-5 col-md-2 pl-lg-0 mr-auto mr-lg-0">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/harrison/images/logo.png') }}" data-at2x="{{ asset('assets/harrison/images/logo.png') }}" alt="" class="default-logo">
                        <img src="{{ asset('assets/harrison/images/logo.png') }}" data-at2x="{{ asset('assets/harrison/images/logo.png') }}" alt="" class="alt-logo">
                        <img src="{{ asset('assets/harrison/images/logo.png') }}" data-at2x="{{ asset('assets/harrison/images/logo.png') }}" class="mobile-logo" alt="">
                    </a>
                </div>
                <div class="col-auto col-md-8 text-right">
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">About Us <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="{{ route('corporateOverview') }}">Corporate Overview</a></li>
                                    <li class="dropdown"><a href="{{ route('missionVision') }}">Mission & Vision</a></li>
                                    <!-- <li class="dropdown"><a href="#">Message From CEO </a></li> -->
                                    <li class="dropdown"><a href="{{ route('ourClient') }}">Our Clients</a></li>
                                    <li class="dropdown"><a href="{{ route('milestones') }}">Milestones</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Achievements <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="{{ route('awards') }}">Award</a></li>
                                    <li class="dropdown"><a href="#">News & Media</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Dealer Centre <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#">Dealer Locator</a></li>
                                    <li class="dropdown"><a href="{{ route('form.become-a-dealer') }}">Become a Partner</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Architects & Designers <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="{{ route('form.architect-and-designer-connect') }}">Connect with Architects</a></li>
                                    <li class="dropdown"><a href="{{ route('form.become-a-associate') }}">Become an Associate</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown simple-dropdown">
                                <a href="#" class="nav-link">Gallery <i
                                        class="fas fa-angle-down dropdown-toggle"></i></a>
                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="{{ route('gallery') }}">Images</a></li>
                                    <li class="dropdown"><a href="{{ route('videos') }}">Videos</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item dropdown megamenu">
                                <a href="#" class="nav-link">Shop <i class="fas fa-angle-down dropdown-toggle"></i></a>

                                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                    <div class="d-lg-flex justify-content-center">
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Door Handle</a></li>
                                            <li><a href="#">Cabinet & Pull Handles</a></li>
                                            <li><a href="#">Mortise Lock</a></li>
                                            <li><a href="#">Cylinders & Pincylindrical Lock</a></li>
                                        </ul>
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Main Door lock</a></li>
                                            <li><a href="#">Godwn & Shutter lock</a></li>
                                            <li><a href="#">Furniture Locks</a></li>
                                            <li><a href="#">Ball Bearing Slides</a></li>

                                        </ul>
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Furniture Hardware</a></li>
                                            <li><a href="#">Furniture & Door Hardware</a></li>
                                            <li><a href="#">Door Bolt & Accessories</a></li>
                                            <li><a href="#">Padlocks</a></li>

                                        </ul>
                                        <ul class="d-lg-inline-block">
                                            <li><a href="#">Screws & Fasteners</a></li>
                                            <li><a href="#">Modular Kitchen</a></li>
                                            <li><a href="#">Modular Storage</a></li>
                                            <li><a href="#">Bike & Cycle Lock</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-md-2 text-right hidden-xs px-lg-0 hide-social-icon">
                    <div class="header-social-icon d-inline-block">
                        <a href="https://www.facebook.com/HarrisonLocks-1494725410855716" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-twitter"></i></a>
                        <div class="header-search-icon search-form-wrapper">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form"><i
                                    class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-left"
                                    action="#">
                                    <div class="search-form-box">
                                        <span
                                            class="search-label alt-font text-small text-uppercase text-medium-gray">What
                                            are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995"
                                            placeholder="Enter your keywords..." name="s" value="" type="text"
                                            autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input -->
                        </div>
                    </div>


                </div>
            </div>
        </nav>

    


    <!-- end navigation -->
</header>
<!-- end HARRISON header -->

@yield('content')

<!--    announcement banner section start   -->
<a class="announcement-banner" href="#announcement-modal"></a>
<div id="announcement-modal" class="mfp-hide white-popup">
    @if ($setting->announcement_type == 'newletter')
        <div class="announcement-with-content">
            <div class="left-area">
                <img src="{{ asset('assets/images/'.$setting->announcement) }}" alt="">
            </div>
            <div class="right-area">
                <h3 class="">{{  $setting->announcement_title }}</h3>
                <p>{{ $setting->announcement_details }}</p>
                <form class="subscriber-form" action="{{route('front.subscriber.submit')}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="email" name="email" placeholder="{{__('Your e-mail')}}">
                        <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                    <div aria-hidden="true">
                        <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                    </div>

                    <button class="btn btn-primary btn-block mt-2" type="submit">
                        <span>{{__('Subscribe')}}</span>
                    </button>
                </form>
            </div>
        </div>
    @else
        <a href="{{ $setting->announcement_link }}">
            <img src="{{ asset('assets/images/'.$setting->announcement) }}" alt="">
        </a>
    @endif


</div>
<!--    announcement banner section end   -->

<!-- theme Site Footer-->
{{--
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Contact Info-->
          <section class="widget widget-light-skin">
            <h3 class="widget-title">{{__('Get In Touch')}}</h3>
            <p class="mb-1"><strong>{{__('Address')}}: </strong> {{$setting->footer_address}}</p>
            <p class="mb-1"><strong>{{__('Phone')}}: </strong> {{$setting->footer_phone}}</p>
            <p class="mb-3"><strong>{{__('Email')}}: </strong> {{$setting->footer_email}}</p>
            <ul class="list-unstyled text-sm">
              <li><span class=""><strong>{{__('Monday-Friday')}}: </strong></span>{{$setting->friday_start}} - {{$setting->friday_end}}</li>
              <li><span class=""><strong>{{__('Saturday')}}: </strong></span>{{$setting->satureday_start}} - {{$setting->satureday_end}}</li>
            </ul>
            @php
            $links = json_decode($setting->social_link,true)['links'];
            $icons = json_decode($setting->social_link,true)['icons'];

          @endphp
            <div class="footer-social-links">
                @foreach ($links as $link_key => $link)
                <a href="{{$link}}"><span><i class="{{$icons[$link_key]}}"></i></span></a>
                @endforeach
            </div>
          </section>
        </div>
        <div class="col-lg-4 col-sm-6">
          <!-- Customer Info-->
          <div class="widget widget-links widget-light-skin">
            <h3 class="widget-title">{{__('Usefull Links')}}</h3>
            <ul>
                @if ($setting->is_faq == 1)
                <li>
                    <a class="" href="{{route('front.faq')}}">{{__('Faq')}}</a>
                </li>
                @endif
                @foreach (DB::table('pages')->wherePos(2)->orwhere('pos',1)->get() as $page)
                <li><a href="{{route('front.page',$page->slug)}}">{{$page->title}}</a></li>

                @endforeach

            </ul>
          </div>
        </div>
        <div class="col-lg-4">
            <!-- Subscription-->
            <section class="widget">
              <h3 class="widget-title">{{__('Newsletter')}}</h3>
              <form class="row subscriber-form" action="{{route('front.subscriber.submit')}}" method="post">
                @csrf
                <div class="col-sm-12">
                  <div class="input-group">
                    <input class="form-control" type="email" name="email" placeholder="{{__('Your e-mail')}}">
                    <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                  <div aria-hidden="true">
                    <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>

                </div>
                <div class="col-sm-12">
                  <button class="btn btn-primary btn-block mt-2" type="submit">
                      <span>{{__('Subscribe')}}</span>
                  </button>
                </div>
                <div class="col-lg-12">
                    <p class="text-sm opacity-80 pt-2">{{__('Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.')}}</p>
                </div>
              </form>
              <div class="pt-3"><img class="d-block gateway_image" src="{{ $setting->footer_gateway_img ? asset('assets/images/'.$setting->footer_gateway_img) : asset('system/resources/assets/images/placeholder.png') }}"></div>
            </section>
          </div>
      </div>
      <!-- Copyright-->
      <p class="footer-copyright"> {{$setting->copy_right}}</p>
    </div>
</footer>


<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-chevron-up"></i>
</a>
<!-- Backdrop-->
<div class="site-backdrop"></div>

--}}


<!-- Harrison footer-->

<footer class="footer-dark bg-slate-blue bg7-g">
    <div class="footer-top padding-40px-tb border-bottom border-color-white-transparent">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 text-center sm-margin-20px-bottom">
                    <span
                        class="alt-font font-weight-500 d-inline-block align-middle margin-5px-right text-uppercase">FOR
                        SALES AND BUSINESS QUERY</span>
                    <a href="tel:1800-572-5795"
                        class="alt-font font-weight-500 text-large d-inline-block text-white text-uppercase text-decoration-line-bottom-gradient">1800-572-5795<span
                            class="bg-white"></span></a>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom ">
        <div class="container">
            <div class="row ">
                <!-- start footer column -->
                <div class="col-12 col-xl-4 col-lg col-sm-4 md-margin-50px-bottom xs-margin-25px-bottom">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/harrison/images/logo.png') }}" alt="Footer Logo"></a>
                    <!-- <p style="padding-top:15px;">Over 6 decades, Harrison which has been brand leader in locks &
                        hardware solution. Be fealess & desire for more from HARRISON with a bold thinking and
                        rigorous craftsmanship combine to bring innovative, sturdy products.</p> -->
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div class="col-12 col-xl-2 col-lg col-sm-4 md-margin-50px-bottom xs-margin-25px-bottom">
                    <h4>Quick Link</h4>
                    <ul>
                        <!-- <li><a href="#">Products</a></li> -->
                        <li><a href="javascript:void(0)">About Us</a></li>
                        <li><a href="{{ route('front.contact') }}">Contact us</a></li>
                        <li><a href="{{ route('form.career') }}">Career</a></li>
                        <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('disclaimer') }}">Disclaimer</a></li>
                        <li><a href="{{ url('terms-and-conditions') }}">Terms & Conditions</a></li>
                    </ul>
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div
                    class="col-12 col-xl-3 col-lg col-sm-4 md-margin-50px-bottom xs-margin-25px-bottom contact-info">
                    <h4>Contact Info</h4>
                    <ul class="address-infor">
                        <li>
                            <div class="desc">13 & 14, Central Market, Punjabi Bagh (West), New Delhi-110026
                            </div>
                        </li>
                        <li>
                            <div class="desc">
                                <a href="tel:1145761101">+91 114 576 1101 -10 ( 10 lines)</a>
                            </div>
                        </li>
                        <li>
                            <div class="desc">
                                <a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div
                    class="col-12 col-xl-3 col-lg-4 col-sm-8 text-sm-center text-lg-left last-paragraph-no-margin">
                    <h4>Subscribe to newsletter</h4>
                    <form class="row subscriber-form" action="{{route('front.subscriber.submit')}}" method="post">
                        @csrf
                        <div class="newsletter-style-03 position-relative margin-30px-tb">
                            <input class="small-input border-transperent rounded m-0 required" name="email"
                                placeholder="Enter your email address" type="email">
                            <button class="btn btn-gradient-fast-blue-purple rounded-right" type="submit">
                                <i class="feather icon-feather-mail icon-extra-small m-0"></i></button>
                            <div class="form-results rounded position-absolute d-none"></div>
                        </div>
                    </form>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; Copyright {{ date('Y') }} <b>harrisonlocks.com</b>. All Rights Reserved.</p>
    </div>
</footer>

<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>

<!-- Harrison footer end -->

<!-- Cookie alert dialog  -->
@if ($setting->is_cookie == 1)
@include('cookieConsent::index')
@endif

<!-- Cookie alert dialog  -->


@php
    $mainbs = [];
    $mainbs['is_announcement'] = $setting->is_announcement;
    $mainbs['announcement_delay'] = $setting->announcement_delay;
    $mainbs['overlay'] = $setting->overlay;
    $mainbs = json_encode($mainbs);
@endphp

<script>
    var mainbs = {!! $mainbs !!};
    var decimal_separator = '{!! $setting->decimal_separator !!}';
    var thousand_separator = '{!! $setting->thousand_separator !!}';
</script>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<!-- <script type="text/javascript" src="{{asset('assets/front/js/plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/scripts.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/myscript.js')}}"></script> -->

<!-- Harrison script -->
<script type="text/javascript" src="{{asset('assets/front/harrison/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/front/harrison/js/theme-vendors.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/front/harrison/js/main.js') }}"></script>
<!-- End harrison script -->

<script type="text/javascript" src="{{asset('assets/front/js/plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lazy.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/scripts.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/myscript.js')}}"></script>

@yield('script')

@if($setting->is_facebook_messenger	== '1')
 {!!  $setting->facebook_messenger !!}
@endif

<script type="text/javascript">
    let mainurl = '{{route('front.index')}}';

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends
    </script>

    @if(Session::has('error'))
    <script>
      $(document).ready(function(){
        DangerNotification('{{Session::get('error')}}')
      })

    </script>
    @endif
    @if(Session::has('success'))
    <script>
      $(document).ready(function(){
        SuccessNotification('{{Session::get('success')}}');
      })

    </script>
    @endif

</body>
</html>
