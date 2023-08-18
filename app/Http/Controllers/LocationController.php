<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\City;

class LocationController extends Controller
{
    public function Location(){
        $locations = Location::with('city')->get();
        return view('backend.locations.index',compact('locations'));
    }

    public function delete($id){
        location::find($id)->delete();
        return redirect()->route('locations.index')->with('success','location deleted successfully');
    }

    public function create(){
        $cities = City::get();
        return view('backend.locations.create',compact('cities'));
    }

    public function store(Request $request){
        $name = $request->name;
        $city_id = $request->city_id;
        $description = $request->description;
        $file_name = null;
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $request->img->getClientOriginalName();
            $request->img->move(public_path('uploads/locations'), $file_name);
        }
        Location::create([
            'location_name' => $name,
            'location_description' => $description,
            'location_img' => $file_name,
            'city_id' => $city_id,
    ]);
        return redirect()->route('locations.index')->with('success','location added successfully');
    }

    public function edit($id){
        $location = Location::with('city')->find($id);
        $cities = City::get();
        return view('backend.locations.edit',compact('location','cities'));
    }

    public function update(Request $request){
        $name = $request->name;
        $city_id = $request->city_id;
        $description = $request->description;
        $file_name = null;

        $location = Location::find($request->id);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $request->img->getClientOriginalName();
            $request->img->move(public_path('uploads/locations'), $file_name);
        }else{
           $file_name=$location->location_img;
        }

        Location::where('id',$request->id)->update([
            'location_name' => $name,
            'location_description' => $description,
            'location_img' => $file_name,
            'city_id' => $city_id,
    ]);
        return redirect()->route('locations.index')->with('success','location update successfully');
    }
}
