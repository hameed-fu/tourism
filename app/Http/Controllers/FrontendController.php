<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $citeis = City::limit(6)->orderBy('id','desc')->get();
        $trips = Trip::get();
        $hotels = Hotel::get();
        return view('frontend.home',compact('citeis','trips','hotels'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function menu_home(){
        return view('frontend.menuhome');
    }
    public function about_us(){
        return view('frontend.aboutus');
    }
    public function contact_us(){
        return view('frontend.contact');
    }

    public function profile(){
        return view('frontend.profile');
    }

    public function booking_history(){
        return view('frontend.booking_history');
    }

    public function user_review(){
        return view('frontend.user_review');
    }




    public function city_trips($city_id){
        $trips = Trip::where('city_id',$city_id)->get();
        return view('frontend.city_trips',compact('trips'));
    }

    public function trip_detail($trip_id){
        $trip = Trip::where('id',$trip_id)->first();
        return view('frontend.trip_detail',compact('trip'));
    }

    public function hotel_detail($hotel_id){
        $hotel = Hotel::where('id',$hotel_id)->first();
        return view('frontend.hotel_detail', compact('hotel'));
    }

    public function all_hotel(){
        $hotels = Hotel::get();
        return view('frontend.all_hotel', compact('hotels'));
    }

    public function all_city(){
        $cities = City::get();
        return view('frontend.all_cities', compact('cities'));
    }

    public function city_detail($city_id){
        $city = City::where('id',$city_id)->first();
        return view('frontend.city_detail', compact('city'));
    }

    public function all_trip(){
        $trips = Trip::get();
        return view('frontend.all_trips',compact('trips'));
    }

    function save_booking(Request $request){
        $booking = new Booking();
        $booking->user_id = auth()->user()->id;
        $booking->trip_id = $request->trip_id;
        $booking->date = $request->booking_date;
        $booking->save();
        return redirect()->back()->with('success', 'Your trip booked successfully');
    }
}
