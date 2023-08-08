<?php

namespace App\Http\Controllers;

use App\Models\TripFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TripFeatureController extends Controller
{
    public function TripFeature(){
        $tripfeatures = TripFeature::get();
        return view('backend.tripfeatures.index',compact('tripfeatures'));
    }

    public function create(){
        return view('backend.tripfeatures.create');
    }

    public function store(Request $request){
        $day = $request->day;
        $itenary = $request->itenary;
        $stay = $request->stay;
        $spot = $request->spot;

        TripFeature::create([
            'day' => $day,
            'itenary' => $itenary,
            'nightstay' => $stay,
            'spot' => $spot,
    ]);
        return redirect()->route('tripfeatures.index')->with('success','trip feature added successfully');
    }
}
