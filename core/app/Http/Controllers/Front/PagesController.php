<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function corporateOverview() {
        return view('front.pages.corporate-overview');
    }
    public function missionVision() {

        return view('front.pages.mission-vision');
    }
    public function ourClient() {

        return view('front.pages.our-client');
    }
    public function milestones() {

        return view('front.pages.milestones');
    }
    public function awards() {

        return view('front.pages.awards');
    }
    public function newsMedia() {

        return view('front.pages.news-media');
    }
    public function gallery() {

        return view('front.pages.gallery');
    }
    public function videos() {

        return view('front.pages.videos');
    }
}
