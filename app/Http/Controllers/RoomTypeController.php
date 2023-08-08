<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomTypeController extends Controller
{
    public function RoomType(){
        $roomtypes =RoomType::get();
        return view('backend.roomtypes.index',compact('roomtypes'));
    }

    public function create(){
        
        return view('backend.roomtypes.create');
    }

    public function store(Request $request){
        $roomtype=$request->roomtype;
        RoomType::create([
            'room_type' => $roomtype,
        ]);
        return redirect()->route('roomtypes.index')->with('success','room type added successfully');

    }
}
