<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function Booking(){
        $bookings = DB::table('bookings')->get();
        return view('backend.bookings.index',compact('bookings'));
    }

    public function create(){
        return view('backend.bookings.create');
    }
}
