<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function City(){
        $cities = DB::table('cities')->get();
        return view('backend.cities.index',compact('cities'));
    }

    public function delete($id){
        City::find($id)->delete();
        return redirect()->route('cities.index')->with('success','city deleted successfully');
    }

    public function create(){
        return view('backend.cities.create');
    }

    public function store(Request $request){
        $name = $request->name;
        $img = $request->img;
        City::create([
            'city_name' => $name,
            'city_img' => $img,
    ]);
        return redirect()->route('cities.index')->with('success','city added successfully');
    }
}
