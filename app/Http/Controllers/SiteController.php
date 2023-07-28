<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function category_save(Request $request){
        $name = $request->category;
        $category = Category::create([
            'name'  => $name,
            'status' => true
        ]);

        // dd($category->id);
        return redirect()->back()->with('success','Category added successfully');
        return "category added successfully";
    }
}
