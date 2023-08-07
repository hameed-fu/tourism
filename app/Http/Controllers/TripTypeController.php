<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripTypeController extends Controller
{
    public function TripType(){
        $triptypes = DB::table('trip_types')->get();
        return view('backend.triptypes.index',compact('triptypes'));
    }

    public function create(){
        return view('backend.triptypes.create');
    }
}
