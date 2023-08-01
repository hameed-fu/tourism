<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Rules\Uppercase;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {;

        // $categories = DB::table('categories')->orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();

        $posts = Post::with('category')->get();

        // $single = DB::table('categories')->where('id',4)->first();
        // $single = DB::table('categories')->where('id',4)->value('id');
        // $single = DB::table('categories')->find(4);
        // dd($single);
        return view('frontend.index',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        // $category = Category::where('id',$id)->first();
        // dd($category);
        return view('frontend.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($request->id);
        dd($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id)->delete();
        // $category = Category::where('id',$id)->delete();
        // $category->delete();
        return redirect()->route('category.index')->with('success','Category deleted successfully');
    }

}
