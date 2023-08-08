<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function Room(){
        $rooms = Room::get();
        return view('backend.rooms.index',compact('rooms'));
    }

    public function create(){
        $roomtypes = RoomType::get();
        $hotels = Hotel::get();
        return view('backend.rooms.create',compact('roomtypes','hotels'));
    }

    public function store(Request $request){
        $roomno = $request->roomno;
        $occupancy = $request->occupancy;
        $description = $request->description;
        $availabillity = $request->availabillity;
        $roomtype_id = $request->roomtype_id;
        $hotel_id = $request->hotel_id;

        Room::create([
            'room_no' => $roomno,
            'roomtype_id' => $roomtype_id,
            'occupancy' => $occupancy,
            'room_description' => $description,
            'availabillity' => $availabillity,
            'hotel_id' => $hotel_id,
    ]);
        return redirect()->route('rooms.index')->with('success','Room added successfully');
    }
}
