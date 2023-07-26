<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function users(){
        return view('backend.users');
    }

    public function demo($name){
        echo "My name is " . $name;
    }
}
