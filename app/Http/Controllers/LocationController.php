<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function Location(){
        $locations = DB::table('locations')->get();
        return view('backend.locations.index',compact('locations'));
    }
}
