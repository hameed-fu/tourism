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
        Province::create(['province_name' => $name]);
        return redirect()->route('provinces.index')->with('success','Province added successfully');
    }
}
