<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $citeis = City::limit(6)->orderBy('id','desc')->get();
        return view('frontend.home',compact('citeis'));
    }

    public function contact(){
        return view('frontend.contact');
    }
}
