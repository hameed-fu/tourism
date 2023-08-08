<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function Province(){
        $provinces = Province::get();
        return view('backend.provinces.index',compact('provinces'));
    }

    public function create(){
        return view('backend.provinces.create');
    }

    public function store(Request $request){
        $name = $request->name;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $request->img->getClientOriginalName();
            $request->img->move(public_path('uploads/provinces'), $file_name);
        }

        Province::create([
            'province_name' => $name,
            'province_img' => $file_name,
    ]);
        return redirect()->route('provinces.index')->with('success','Province added successfully');
    }

    public function delete($id){
        Province::find($id)->delete();
        return redirect()->route('provinces.index')->with('success','User deleted successfully');
    }

    // $province = Province::find($id);
    // if ($request->hasFile('img')) {
    //     $img = $request->file('img');
    //     $file_name = $request->img->getClientOriginalName();
    //     $request->img->move(public_path('uploads/provinces'), $file_name);
    // }else{
    //     $file_name = $province->province_img;
    // }
}
