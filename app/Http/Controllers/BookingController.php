<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function Booking(){
        $bookings = Booking::get();
        return view('backend.bookings.index',compact('bookings'));
    }

    public function create(){
        $users = User::get();
        $roomtypes = RoomType::get();
        return view('backend.bookings.create',compact('users','roomtypes'));
    }

    public function store(Request $request){
        $user_id = $request->user_id;
        $roomtype_id = $request->roomtype_id;
        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $status = $request->status;

        Booking::create([
            'user_id' => $user_id,
            'roomtype_id' => $roomtype_id,
            'start_date' => $startdate,
            'end_date' => $startdate,
            'status' => $status,
        ]);
        return redirect()->route('bookings.index')->with('success','Booking  added successfully');
    }
}
