@extends('master.front')

@section('title')
Milestones
@endsection

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
@endsection

@section('content')
 <!-- Page Title-->

@include('includes.title', ['banner' => '', 'title'=>'Milestones'])

<div class="timeline-container">
    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
        <div class="list-progress">
            <div class="inner"></div>
        </div>
        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Masking Tape & Biometric Locks</p>
            </div>
            <div class="icon-holder">
                2022
            </div>
        </li>

        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Screws & Tantem</p>
            </div>
            <div class="icon-holder">2019</div>
        </li>

        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Kitchen Basket & Valv 'E' Drawer Tantem 'E' Boxes</p>
            </div>
            <div class="icon-holder">2016</div>
        </li>
        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Locks & Door Hardware</p>
            </div>
            <div class="icon-holder">2010</div>
        </li>

        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Handle Plate Sets</p>
            </div>
            <div class="icon-holder">2003</div>
        </li>
        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Locks & Hardware</p>
            </div>
            <div class="icon-holder">2000</div>
        </li>
        <li>

            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Locks & Furniture</p>
            </div>
            <div class="icon-holder">1990</div>
        </li>
        <li>
            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Lock of all kinds</p>
            </div>
            <div class="icon-holder">1971</div>
        </li>
        <li>

            <div class="bdr_bg">
                <img src="{{ asset('assets/harrison/images/logo.png') }}">
                <p>Launches<br>Brass & Iron Locks</p>
            </div>

            <div class="icon-holder">1951</div>
        </li>
    </ul>
</div>

@section('script')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
<script type="text/javascript" src="{{ asset('assets/front/harrison/js/timeline.js') }}"></script>
@endsection

@endsection