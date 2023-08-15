<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function City(){
        $cities = City::get();

        return view('backend.cities.index',compact('cities'));
    }

    public function delete($id){
        City::find($id)->delete();
        return redirect()->route('cities.index')->with('success','city deleted successfully');
    }

    public function create(){
        $provinces = Province::get();
        return view('backend.cities.create',compact('provinces'));
    }

    public function store(Request $request){
        $name = $request->name;
        $province_id = $request->province_id;
        $file_name="null";

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $request->img->getClientOriginalName();
            $request->img->move(public_path('uploads/cities'), $file_name);
        }

        City::create([
            'city_name' => $name,
            'city_img' => $file_name,
            'province_id' => $province_id,
        ]);
        return redirect()->route('cities.index')->with('success','city added successfully');
    }

    public function edit($id){
        $city = City::with('province')->find($id);
        $provinces = Province::get();
        return view('backend.cities.edit',compact('city','provinces'));
    }

    public function update(Request $request){
        $name = $request->name;
        $province_id = $request->province_id;
        $file_name="null";
        $city = City::find($request->id);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $request->img->getClientOriginalName();
            $request->img->move(public_path('uploads/cities'), $file_name);
        }else{
            $file_name = $city->city_img;
        }

        City::where('id',$request->id)->update([
            'city_name' => $name,
            'city_img' => $file_name,
            'province_id' => $province_id,
        ]);
        return redirect()->route('cities.index')->with('success','City updated successfully');
    }
}
