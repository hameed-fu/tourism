<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function Location(){
        $locations = DB::table('locations')->get();
        return view('backend.locations.index',compact('locations'));
    }

    public function create(){
        return view('backend.locations.create');
    }

    public function store(Request $request){
        $name = $request->name;
        $description = $request->description;
        $img = $request->img;
        Location::create([
            'location_name' => $name,
            'location_description' => $description,
            'location_img' => $img,
    ]);
        return redirect()->route('locations.index')->with('success','location added successfully');
    }
}
