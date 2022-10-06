@extends('master.front')

@section('title')
    {{__('Page')}}
@endsection

@section('content')
{{--
    <!-- Page Title-->
<div class="page-title mb-0">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="{{route('front.index')}}">{{__('Home')}}</a> </li>
                <li class="separator">&nbsp;</li>
                <li>{{$page->title}}</li>
              </ul>
        </div>
    </div>
  </div>
</div>
<!-- Page Content-->
<div class="pt-5 pb-5 ">
    <div class="container ">
        <!-- Categories-->
        <div class="row">
            <div class="col-lg-12 mb-4 mt-4">
                <div class="card">
                    <div class="card-body px-4 py-5">
                        <div class="d-page-content">
                            <h4 class="d-block text-center"><b>{{$page->title}}</b></h4>
                            {!! $page->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
--}}

<!-- start page title -->

<section class="parallax inner-banner" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('assets/harrison/images/page-title-bg-03.jpg') }}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 page-title-large text-center">
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom">{{$page->title}}</h1>
                <span class="d-block text-white opacity-6 alt-font margin-5px-bottom xs-line-height-20px"><a href="{{ url('/') }}">{{__('Home')}}</a> // {{$page->title}} </span>
            </div>
        </div>
    </div>
</section>

@if(!empty($page->details))
    <div class="container">
        {!! $page->details !!}
    </div>
@endif

@endsection
