@extends('master.front')

@section('title')
Videos
@endsection

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
@endsection

@section('content')
 <!-- Page Title-->
@include('includes.title', ['banner' => '', 'title'=>'Videos'])

<!-- start section -->
<section class="big-section">
    <div class="container">       
        <div class="row">
            <div class="col-12 col-md-6 text-center fit-videos sm-margin-30px-bottom">
                <!-- start youtube video -->
                <iframe width="560" height="315" src="{{ asset('assets/harrison/videos/video_1.mp4') }}" autoplay="0" allowfullscreen></iframe>
                <!-- end youtube video -->
            </div>
            <div class="col-12 col-md-6 text-center fit-videos sm-margin-30px-bottom">
                <!-- start youtube video -->
                <iframe width="560" height="315" src="{{ asset('assets/harrison/videos/vid2.mp4') }}" autoplay="0"
                    allowfullscreen></iframe>
                <!-- end youtube video -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->


@endsection