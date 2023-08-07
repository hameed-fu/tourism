<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function Province(){
        $provinces = DB::table('provinces')->get();
        return view('backend.provinces.index',compact('provinces'));
    }

    public function create(){
        return view('backend.provinces.create');
    }

    public function store(Request $request){
        $name = $request->name;
        $img = $request->img;
        Province::create([
            'province_name' => $name,
            'province_img' => $img,
    ]);
        return redirect()->route('provinces.index')->with('success','Province added successfully');
    }

    public function delete($id){
        Province::find($id)->delete();
        return redirect()->route('provinces.index')->with('success','User deleted successfully');
    }
}
