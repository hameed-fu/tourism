<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomTypeController extends Controller
{
    public function RoomType(){
        $roomtypes = DB::table('room_types')->get();
        return view('backend.roomtypes.index',compact('roomtypes'));
    }

    public function create(){
        return view('backend.roomtypes.create');
    }
}
