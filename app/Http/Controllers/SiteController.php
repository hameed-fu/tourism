<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Validator;
use DB;

class SiteController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->orderBy('id','desc')->get();
        // $single = DB::table('categories')->where('id',4)->first();
        // $single = DB::table('categories')->where('id',4)->value('id');
        // $single = DB::table('categories')->find(4);
        // dd($single);
        return view('frontend.index',compact('categories'));
    }

    public function category_save(Request $request){
        $name = $request->name;

        // $request->validate([
        //     'name' => 'required|max:50|unique:categories',
        // ]);

        $validater = Validator::make($request->all(),[
            'name' => 'required|max:50|unique:categories|alpha_num',
        ]);
        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();
        }
        $category = Category::create([
            'name'  => $name,
            'status' => true
        ]);

        return redirect()->back()->with('success','Category added successfully');
    }
}
