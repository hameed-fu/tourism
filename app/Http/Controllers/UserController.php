<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function User(){
        $users = DB::table('users')->get();
        return view('backend.users.index',compact('users'));
    }

    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }

    public function create(){
        return view('backend.users.create');
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $img = $request->img;
        $password = $request->password;
        $gender = $request->gender;
        $contact = $request->contact;
        $address = $request->address;
        $role = $request->role;

        User::create([
            'name' => $name,
            'email' => $email,
            'user_img' => $img,
            'password' => Hash::make($password),
            'gender' => $gender,
            'user_contact' => $contact,
            'user_address' => $address,
            'user_role' => $role,
    ]);
    return redirect()->route('users.index')->with('success','user added successfully');
   }
}
