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

    public function delete(Request $request){
        RoomType::find($request->id)->delete();
        return redirect()->route('roomtypes.index')->with('success', "Room Type deleted successfully");
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

    public function edit(Request $request){
        $roomtype=RoomType::find($request->id);
        return view('backend.roomtypes.edit',compact('roomtype'));
    }

    public function update(Request $request){
        $roomtype=$request->roomtype;
        RoomType::where('id',$request->id)->update([
            'room_type' => $roomtype,
        ]);
        return redirect()->route('roomtypes.index')->with('success','room type added successfully');

    }
}
