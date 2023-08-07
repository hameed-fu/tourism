<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function Room(){
        $rooms = DB::table('rooms')->get();
        return view('backend.rooms.index',compact('rooms'));
    }

    public function create(){
        return view('backend.rooms.create');
    }
}
