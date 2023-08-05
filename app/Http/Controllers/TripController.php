<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function Trip(){
        $trips = DB::table('trips')->get();
        foreach($trips as $trip){
            dd($trip->trip_name);
        }
        return view('backend.trips.index',compact('trips'));
    }
}
