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
    public function Room()
    {
        $rooms = Room::get();
        return view('backend.rooms.index', compact('rooms'));
    }

    public function delete(Request $request)
    {
        Room::find($request->id)->delete();
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully');
    }

    public function create()
    {
        $roomtypes = RoomType::get();
        $hotels = Hotel::get();
        return view('backend.rooms.create', compact('roomtypes', 'hotels'));
    }

    public function store(Request $request)
    {
        $roomno = $request->roomno;
        $occupancy = $request->occupancy;
        $description = $request->description;
        $availability = $request->availabillity;
        $roomtype_id = $request->roomtype_id;
        $hotel_id = $request->hotel_id;

        Room::create([
            'room_no' => $roomno,
            'roomtype_id' => $roomtype_id,
            'occupancy' => $occupancy,
            'room_description' => $description,
            'availability' => $availability,
            'hotel_id' => $hotel_id,
        ]);
        return redirect()->route('rooms.index')->with('success', 'Room added successfully');
    }

    public function edit($id)
    {
        $room = Room::with('roomtype', 'hotel')->find($id);
        $roomtypes = RoomType::get();
        $hotels = Hotel::get();
        return view('backend.rooms.edit', compact('room', 'roomtypes', 'hotels'));
    }

    public function update(Request $request)
    {
        $roomno = $request->roomno;
        $occupancy = $request->occupancy;
        $description = $request->description;
        $availability = $request->availabillity;
        $roomtype_id = $request->roomtype_id;
        $hotel_id = $request->hotel_id;

        Room::where('id', $request->id)->update([
            'room_no' => $roomno,
            'roomtype_id' => $roomtype_id,
            'occupancy' => $occupancy,
            'room_description' => $description,
            'availability' => $availability,
            'hotel_id' => $hotel_id,
        ]);
        return redirect()->route('rooms.index')->with('success', 'Room Updated successfully');
    }
}
