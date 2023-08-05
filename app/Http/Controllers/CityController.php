<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function City(){
        $cities = DB::table('cities')->get();
        return view('backend.cities.index',compact('cities'));
    }
}
