<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Trip;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $citeis = City::limit(6)->orderBy('id','desc')->get();
        $trips = Trip::get();
        $hotels = Hotel::get();
        return view('frontend.home',compact('citeis','trips','hotels'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function menu_home(){
        return view('frontend.menuhome');
    }
    public function about_us(){
        return view('frontend.aboutus');
    }
    public function destination(){
        return view('frontend.destination');
    }
    public function trip(){
        return view('frontend.trip');
    }
    public function hotel(){
        return view('frontend.hotel');
    }
}
