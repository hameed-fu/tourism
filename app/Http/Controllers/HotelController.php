<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function Hotel(){
        $hotels = DB::table('hotels')->get();
        return view('backend.hotels.index',compact('hotels'));
    }
}
