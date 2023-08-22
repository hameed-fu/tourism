<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function User()
    {
        $users = User::where('id','!=',auth()->user()->id)->get();
        return view('backend.users.index', compact('users'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $file_name = null; // Initialize the variable outside the if condition

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $img->getClientOriginalName(); // Use $img instead of $request->img
            $img->move(public_path('uploads/users'), $file_name);
        }

        $email = $request->email;
        $password = $request->password;
        $gender = $request->gender;
        $contact = $request->contact;
        $address = $request->address;
        $role = $request->role;

        User::create([
            'name' => $name,
            'email' => $email,
            'user_img' => $file_name, // Assign the file name here
            'password' => Hash::make($password),
            'gender' => $gender,
            'user_contact' => $contact,
            'user_address' => $address,
            'user_role' => $role,
        ]);

        return redirect()->route('users.index')->with('success', 'User added successfully');
    }

    public function edit(Request $request){
        $users = User::find($request->id);
        return view('backend.users.edit',compact('users'));

    }

    public function update(Request $request)
    {
        $name = $request->name;
        $file_name = null; // Initialize the variable outside the if condition

        $user = User::find($request->id);
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $img->getClientOriginalName(); // Use $img instead of $request->img
            $img->move(public_path('uploads/users'), $file_name);
        }else{
            $file_name = $user->user_img;
        }

        $email = $request->email;
        $password = $request->password;
        $gender = $request->gender;
        $contact = $request->contact;
        $address = $request->address;
        $role = $request->role;

        User::where('id',$request->id)->update([
            'name' => $name,
            'email' => $email,
            'user_img' => $file_name, // Assign the file name here
            'password' => Hash::make($password),
            'gender' => $gender,
            'user_contact' => $contact,
            'user_address' => $address,
            'user_role' => $role,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function admin(){
        $authUserId = Auth::id();
        $users = User::where('id',$authUserId)->get();
        return view('backend.users.admin',compact('users'));
    }

    public function my_profile(){
        $authUserId = Auth::id();
        $user = User::where('id',$authUserId)->first();
        return view('backend.users.profile',compact('user'));
    }

    public function edit_profile(Request $request){
         $name = $request->name;
         $email = $request->email;
         

         $file_name = null; 

        $user = User::find(Auth::id());
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $img->getClientOriginalName(); 
            $img->move(public_path('uploads/users'), $file_name);
        }else{
            $file_name = $user->user_img;
        }

         User::where('id',Auth::id())->update([
            'name' => $name,
            'email' => $email,
            'user_img' => $file_name, 
            'password' => auth()->user()->password,
            'gender' => auth()->user()->gender,
            'user_contact' => auth()->user()->user_contact,
            'user_address' => auth()->user()->user_address,
            'user_role' => auth()->user()->user_role,
        ]);
        return view('backend.dashboard');
    }

    public function edit_password(Request $request){
        dd(auth()->user()->password. "...".Hash::make($request->old_password));

            if(Hash::make($request->old_password) === auth()->User()->password){
                dd("hi");

            }
            else{
                dd('no');
            }
    }
}
