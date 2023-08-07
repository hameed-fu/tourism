<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function Review(){
        $reviews = DB::table('reviews')->get();
        return view('backend.reviews.index',compact('reviews'));
    }

    public function create(){
        return view('backend.reviews.create');
    }
}
