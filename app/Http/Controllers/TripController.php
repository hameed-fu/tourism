<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function Trip(){
        $trips = DB::table('trips')->get();
        return view('backend.trips.index',compact('trips'));
    }

    public function delete($id){
        Trip::find($id)->delete();
        return redirect()->route('trips.index')->with('success','Trip deleted successfully');
    }

    public function create(){
        return view('backend.trips.create');
    }
}
