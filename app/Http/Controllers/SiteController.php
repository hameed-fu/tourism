<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;
use App\Models\Category;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Validator;

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

        $request->validate([
            'name' => ['required','max:50','unique:categories', new Uppercase ],
        ]);

        // $validater = Validator::make($request->all(),[
        //     'name' => 'required|max:50|unique:categories|alpha_num| new UpperCase()',
        // ]);
        if($validater->fails()){
            return redirect()->back()->withErrors($validater)->withInput();
        }
        $category = Category::create([
            'name'  => $name,
            'status' => true
        ]);

        return redirect()->back()->with('success','Category added successfully');
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id)->update([
            'name' => $request->name
        ]);
        // $category->name = $request->name;
        // $category->save();
        return redirect()->route('category.index')->with('success','Category update successfully');
    }

    public function save_post(Request $request){
        $title = $request->title;
        $category_id = $request->category_id;

        $request->validate([
            'title' => ['required','max:50' ],
        ]);
        $category = Post::create([
            'title'  => $title,
            'category_id' => $category_id
        ]);

        return redirect()->back()->with('success','Post added successfully');
    }
}
