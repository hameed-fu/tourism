<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function users(){
        $name = "<h1>Ali khan</h1>";
        $items = array(
            ['name' => "Shoe","price" => 900],
            ['name' => "Shirt","price" => 400],
            ['name' => "book","price" => 200],
        );
        session()->put('login',true);
        session()->put('role','Admin');
        session()->put('user','Asad');
        session()->put('class','5th');
        Session::put('company','ET');
        Session::put('company','Encoder Techs');


        // session()->forget(['user','class']);
        session()->flush();
        return view('backend.users',compact('name','items'));
    }

    public function demo($name){
        echo "My name is " . $name;
    }
}
