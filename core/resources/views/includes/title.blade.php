@php
    $image = asset('assets/harrison/images/page-title-bg-03.jpg');
    $txt = "";

    if(isset($banner) && !empty($banner)) {
        $image = asset('assets/images/'.$banner);
    }
    if(isset($title) && !empty($title)) {
        $txt = (strlen($title) > 40)?substr($title, 0, 40).'...':$title;
    }
@endphp
<section class="parallax inner-banner" data-parallax-background-ratio="0.5" style="background-image: url('{{ $image }}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 page-title-large text-center">
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom">{{ $txt }}</h1>
                <span class="d-block text-white opacity-6 alt-font margin-5px-bottom xs-line-height-20px"><a href="{{ url('/') }}">{{__('Home')}}</a> // {{ $txt }} </span>
            </div>
        </div>
    </div>
</section>