<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportController extends Controller
{
    public function Transport(){
        $transports = DB::table('transports')->get();
        return view('backend.transports.index',compact('transports'));
    }

    public function create(){
        return view('backend.transports.create');
    }
}
