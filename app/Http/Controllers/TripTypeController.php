<?php

namespace App\Http\Controllers;

use App\Models\TripType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripTypeController extends Controller
{
    public function TripType(){
        $triptypes = TripType::get();
        return view('backend.triptypes.index',compact('triptypes'));
    }

    public function delete($id){
        TripType::find($id)->delete();
        return redirect()->route('triptypes.index')->with('success','Trip Type deleted successfully');
    }

    public function create(){
        return view('backend.triptypes.create');
    }
    
    public function store(Request $request){
        $name = $request->name;
        $status = $request->status;
        TripType::create([
            'triptype_name' => $name,
            'triptype_status' => $status,
    ]);
        return redirect()->route('triptypes.index')->with('success','trip type added successfully');
    }

    public function edit(Request $request){
        $triptype=TripType::find($request->id);
        return view('backend.triptypes.edit',compact('triptype'));
    }

    public function update(Request $request){
        $name = $request->name;
        $status = $request->status;
        TripType::where('id',$request->id)->update([
            'triptype_name' => $name,
            'triptype_status' => $status,
    ]);
        return redirect()->route('triptypes.index')->with('success','trip type Updated successfully');
    }
}
