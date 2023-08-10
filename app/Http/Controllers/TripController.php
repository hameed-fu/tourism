<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use App\Models\TripType;
use App\Models\Transport;
use App\Models\TripFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TripController extends Controller
{
    public function Trip()
    {
        $trips = Trip::with('transport')->get();
        // dd($trips);
        return view('backend.trips.index', compact('trips'));
    }

    public function delete($id)
    {
        Trip::find($id)->delete();
        return redirect()->route('trips.index')->with('success', 'Trip deleted successfully');
    }

    public function create()
    {
        $cities = City::get();
        $triptypes = TripType::get();
        $transports = Transport::get();
        return view('backend.trips.create', compact('cities', 'triptypes', 'transports'));
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');
        $status = $request->input('status');
        $description = $request->input('description');
        $city_id = $request->input('city_id');
        $triptype_id = $request->input('triptype_id');
        $transportation_id = $request->input('transportation_id');

        $trip = Trip::create([
            'trip_name' => $name,
            'start_date' => $startdate,
            'end_date' => $enddate,
            'city_id' => $city_id,
            'triptype_id' => $triptype_id,
            'transportation_id' => $transportation_id,
            'status' => $status,
            'trip_description' => $description,
        ]);
        
        foreach($request->day as $key => $row){

            TripFeature::create([
                'trip_id' => $trip->id,
                'day' => $row,
                'itenary' => $request->itinerary[$key],
                'nightstay' => $request->stay[$key],
                'spot' =>  $request->spot[$key],
            ]);
        }


        return redirect()->route('trips.index')->with('success', 'trip added successfully');
    }

    public function edit($id){
        $trip = Trip::with('city','triptype','transport')->find($id);
        $cities = City::get();
        $triptypes = TripType::get();
        $transports = Transport::get();
        $tripfeatures = TripFeature::get();
        return view('backend.trips.edit',compact('trip','cities','triptypes','transports','tripfeatures'));
    }

    public function update(Request $request)
    {
        $name = $request->input('name');
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');
        $status = $request->input('status');
        $description = $request->input('description');
        $city_id = $request->input('city_id');
        $triptype_id = $request->input('triptype_id');
        $transportation_id = $request->input('transportation_id');

        $trip =Trip::where('id',$request->id)->update([
            'trip_name' => $name,
            'start_date' => $startdate,
            'end_date' => $enddate,
            'city_id' => $city_id,
            'triptype_id' => $triptype_id,
            'transportation_id' => $transportation_id,
            'status' => $status,
            'trip_description' => $description,
        ]);
        foreach($request->day as $key => $row){
       
            // TripFeature::where('id',$trip)->update([     
            //     'trip_id' => $trip,
            //     'day' => $row,
            //     'itenary' => $request->itinerary[$key],
            //     'nightstay' => $request->stay[$key],
            //     'spot' =>  $request->spot[$key],
            // ]);

            TripFeature::where('id', $row)->update([
                'trip_id' => $request->id,
                'day' => $row,
                'itenary' => $request->itinerary[$key],
                'nightstay' => $request->stay[$key],
                'spot' => $request->spot[$key],
            ]);
        }

        return redirect()->route('trips.index')->with('success', 'trip Update successfully');
    }
}
