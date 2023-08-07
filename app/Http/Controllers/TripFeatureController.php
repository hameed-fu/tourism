<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TripFeatureController extends Controller
{
    public function TripFeature(){
        $tripfeatures = DB::table('trip_features')->get();
        return view('backend.tripfeatures.index',compact('tripfeatures'));
    }

    public function create(){
        return view('backend.tripfeatures.create');
    }
}
