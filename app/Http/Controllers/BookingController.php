<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function Booking(){
        $bookings = Booking::orderBy('id','desc')->get();
        return view('backend.bookings.index',compact('bookings'));
    }

    public function create(){
        $users = User::get();
        $trips = Trip::get();
        return view('backend.bookings.create',compact('users','trips'));
    }

    public function delete(Request $request){
        Booking::find($request->id)->delete();
        return redirect()->route('bookings.index')->with('success', "Booking deleted successfully");
    }

    public function store(Request $request){
        $user_id = $request->user_id;
        $trip_id = $request->trip_id;
        $date = $request->date;
        $status = $request->status;


        Booking::create([
            'user_id' => $user_id,
            'trip_id' => $trip_id,
            'date' => $date,
            'status' =>$status,

        ]);
        return redirect()->route('bookings.index')->with('success','Booking  added successfully');
    }

    public function edit($id)
    {
        $booking = Booking::with('trip', 'user')->find($id);
        $trips = Trip::get();
        $users = User::get();
        return view('backend.bookings.edit', compact('booking', 'trips', 'users'));
    }

    public function update(Request $request){
        $user_id = $request->user_id;
        $trip_id = $request->trip_id;
        $date = $request->date;
        $status = $request->status;


        Booking::where('id',$request->id)->update([
            'user_id' => $user_id,
            'trip_id' => $trip_id,
            'date' => $date,
            'status' =>$status,
        ]);
        return redirect()->route('bookings.index')->with('success','Booking  Updated successfully');
    }

    public function change_status($id,$status){

        Booking::where('id',$id)->update([
            'status' => $status,
        ]);
        return redirect()->route('bookings.index')->with('success', "Status Changed successfully");
    }
}
