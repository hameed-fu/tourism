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

    public function create()
    {
        $users = User::get();
        $trips = Trip::get();
        return view('backend.reviews.create', compact('users', 'trips',));
    }

    public function delete(Request $request){
        Review::find($request->id)->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully');
    }


    public function store(Request $request){

        $rating = $request->rating;
        $reviewdate = $request->reviewdate;
        $comments = $request->comments;
        $user_id = $request->user_id;
        $trip_id = $request->trip_id;

        Review::create([
            'user_id' => $user_id,
            'rating' => $rating,
            'review_date' => $reviewdate,
            'comments' => $comments,
            'trip_id' => $trip_id,
        ]);
        return redirect()->route('reviews.index')->with('success','review added successfully');

    }

    public function edit($id)
    {
        $review = Review::with('trip', 'user')->find($id);
        $trips = Trip::get();
        $users = User::get();
        return view('backend.reviews.edit', compact('review', 'trips', 'users'));
    }

    public function update(Request $request){

        $rating = $request->rating;
        $reviewdate = $request->reviewdate;
        $comments = $request->comments;
        $user_id = $request->user_id;
        $trip_id = $request->trip_id;

        Review::where('id',$request->id)->update([
            'user_id' => $user_id,
            'rating' => $rating,
            'review_date' => $reviewdate,
            'comments' => $comments,
            'trip_id' => $trip_id,
        ]);
        return redirect()->route('reviews.index')->with('success','review Update successfully');

    }
}
