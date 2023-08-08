<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportController extends Controller
{
    public function Transport(){
        $transports = Transport::get();
        return view('backend.transports.index',compact('transports'));
    }

    public function create(){
        return view('backend.transports.create');
    }

    public function store(Request $request){
        $name = $request->name;
        $model = $request->model;
        $seats = $request->seats;

        Transport::create([
            'transport_name' => $name,
            'transport_model' => $model,
            'no_seats' => $seats,
    ]);
        return redirect()->route('transports.index')->with('success','transport added successfully');
    }
}
