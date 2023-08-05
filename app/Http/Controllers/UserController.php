<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;

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
}
