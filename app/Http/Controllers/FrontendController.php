<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use App\Models\Hotel;
use App\Models\Review;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

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
        $authUserId = Auth::id();
        $users = User::where('id',$authUserId)->get();
        return view('frontend.profile',compact('users'));
    }

    public function booking_history(){
        $authUserId = Auth::id();
        $bookings = Booking::with(['user', 'trip'])->where('user_id', $authUserId)->get();

        return view('frontend.booking_history',compact('bookings'));
    }

    public function user_review(){
        $authUserId = Auth::id();
        // $bookings = Booking::with(['user', 'trip'])->where('user_id', $authUserId)->get();
        // $bookings = Booking::with('trip')->whereNotIn('id', function ($query) {
        //         $query->select('trip_id')
        //           ->from('reviews')
        //           ->where('user_id', '!=' ,auth()->user()->id);

        // })
        // ->get();

        $bookings = Booking::with('trip')
        ->whereDoesntHave('trip.reviews', function ($query) {
            $query->where('user_id', auth()->user()->id);})->where('user_id', auth()->user()->id)->get();
    

        // dd($bookings);
        return view('frontend.user_review',compact('bookings'));
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

    function add_review(Request $request){
        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->trip_id = $request->trip_id;
        $review->review_date = date('Y-m-d');
        $review->comments = $request->comment;
        $review->rating = $request->rating;
        $review->save();
        return response()->json(['message' => 'Review added successfully']);
        return redirect()->back()->with('success', 'Your review added successfully');
    }

    public function update_profile(Request $request){
        $user = User::where('id', $request->id)->first();
        return view('frontend.profile_edit', compact('user'));
    }

    public function change_profile( Request $request)
    {
        dd($request);
        $name = $request->name;
         $email = $request->email;


         $file_name = null;

        $user = User::find(Auth::id());
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $img->getClientOriginalName();
            $img->move(public_path('uploads/users'), $file_name);
        }else{
            $file_name = $user->user_img;
        }

         User::where('id',Auth::id())->update([
            'name' => $name,
            'email' => $email,
            'user_img' => $file_name
        ]);
        return redirect()->back()->with('success','Profile updated');
    
    }
}
