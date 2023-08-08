<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function Review(){
        $reviews = Review::get();
        return view('backend.reviews.index',compact('reviews'));
    }

    public function create(){
        $users = User::get();
        $trips = Trip::get();
        return view('backend.reviews.create',compact('users','trips'));
    }

    public function store(Request $request){

        $rating = $request->rating;
        $reviewdate = $request->reviewdate;
        $user_id = $request->user_id;
        $trip_id = $request->trip_id;

        Review::create([
            'user_id' => $user_id,
            'rating' => $rating,
            'review_date' => $reviewdate,
            'trip_id' => $trip_id,
        ]);
        return redirect()->route('reviews.index')->with('success','review added successfully');

    }
}
