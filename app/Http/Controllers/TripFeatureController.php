<?php

namespace App\Http\Controllers;

use App\Models\TripFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Trip;

class TripFeatureController extends Controller
{
    public function TripFeature()
    {
        $tripfeatures = TripFeature::get();
        return view('backend.tripfeatures.index', compact('tripfeatures'));
    }
    

    public function delete(Request $request){
       $id= TripFeature::find($request->id)->delete();
        return redirect()->route('tripfeatures.index')->with('success','Trip feature deleted successfully');
    }
    public function create()
    {
        $trips=Trip::get();
        return view('backend.tripfeatures.create',compact('trips'));
    }

    public function store(Request $request)
    {
        $day = $request->day;
        $itenary = $request->itenary;
        $stay = $request->stay;
        $spot = $request->spot;
        $trip_id=$request->trip_id;

        TripFeature::create([
            'trip_id' =>$trip_id,
            'day' => $day,
            'itenary' => $itenary,
            'nightstay' => $stay,
            'spot' => $spot,
        ]);
        return redirect()->route('tripfeatures.index')->with('success', 'trip feature added successfully');
    }

    public function edit($id){
        $tripfeature = TripFeature::with('trip')->find($id);
        $trips = Trip::get();
        return view('backend.tripfeatures.edit',compact('tripfeature','trips'));
    }

    public function update(Request $request)
    {
        $day = $request->day;
        $itenary = $request->itenary;
        $stay = $request->stay;
        $spot = $request->spot;
        $trip_id=$request->trip_id;

        TripFeature::where('id',$request->id)->update([
            'trip_id' =>$trip_id,
            'day' => $day,
            'itenary' => $itenary,
            'nightstay' => $stay,
            'spot' => $spot,
        ]);
        return redirect()->route('tripfeatures.index')->with('success', 'trip feature Update successfully');
    }
}
