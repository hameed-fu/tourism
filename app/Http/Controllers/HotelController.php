<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function Hotel()
    {
        $hotels = Hotel::get();
        return view('backend.hotels.index', compact('hotels'));
    }

    public function delete($id)
    {
        Hotel::find($id)->delete();
        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully');
    }

    public function create()
    {
        $cities = City::get();
        return view('backend.hotels.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $noroom = $request->input('noroom');
        $name = $request->input('name');
        $facility = $request->input('facility');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $description = $request->input('description');
        $range = $request->input('range');
        $city_id = $request->input('city_id');
        $file_name = null;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $img->getClientOriginalName();
            $img->move(public_path('uploads/hotels'), $file_name);
        }

        Hotel::create([
            'no_room' => $noroom, // You need to define $noroom somewhere in your code
            'hotel_name' => $name,
            'facilities' => $facility,
            'contact' => $contact,
            'email' => $email,
            'description' => $description,
            'hotel_img' => $file_name,
            'price_range' => $range,
            'city_id' => $city_id,
        ]);

        return redirect()->route('hotels.index')->with('success', 'Hotel added successfully');
    }

    public function edit($id){
        $hotel = Hotel::with('city')->find($id);
        $cities = City::get();
        return view('backend.hotels.edit',compact('hotel','cities'));
    }

    public function update(Request $request)
    {
        $noroom = $request->input('noroom');
        $name = $request->input('name');
        $facility = $request->input('facility');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $description = $request->input('description');
        $range = $request->input('range');
        $city_id = $request->input('city_id');
        $file_name = null;

        $hotel=Hotel::find($request->id);
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $img->getClientOriginalName();
            $img->move(public_path('uploads/hotels'), $file_name);
        }else{
            $file_name = $hotel->hotel_img;
        }

        Hotel::where('id',$hotel->id)->update([
            'no_room' => $noroom, // You need to define $noroom somewhere in your code
            'hotel_name' => $name,
            'facilities' => $facility,
            'contact' => $contact,
            'email' => $email,
            'description' => $description,
            'hotel_img' => $file_name,
            'price_range' => $range,
            'city_id' => $city_id,
        ]);

        return redirect()->route('hotels.index')->with('success', 'Hotel Update successfully');
    }
}
