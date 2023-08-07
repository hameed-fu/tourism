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

    public function delete($id){
        Hotel::find($id)->delete();
        return redirect()->route('hotels.index')->with('success','Hotel deleted successfully');
    }

    public function create(){
        return view('backend.hotels.create');
    }
}
