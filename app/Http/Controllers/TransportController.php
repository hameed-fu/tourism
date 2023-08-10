<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportController extends Controller
{
    public function Transport()
    {
        $transports = Transport::get();
        return view('backend.transports.index', compact('transports'));
    }

    public function delete(Request $request)
    {
        Transport::find($request->id)->delete();
        return redirect()->route('transports.index')->with('success', 'Transport deleted successfully');
    }

    public function create()
    {
        return view('backend.transports.create');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $model = $request->model;
        $seats = $request->seats;

        Transport::create([
            'transport_name' => $name,
            'transport_model' => $model,
            'no_seats' => $seats,
        ]);
        return redirect()->route('transports.index')->with('success', 'transport added successfully');
    }
    public function edit(Request $request)
    {
        $transport = Transport::find($request->id);
        return view('backend.transports.edit', compact('transport'));
    }

    public function update(Request $request)
    {
        $name = $request->name;
        $model = $request->model;
        $seats = $request->seats;

        Transport::where('id', $request->id)->update([
            'transport_name' => $name,
            'transport_model' => $model,
            'no_seats' => $seats,
        ]);
        return redirect()->route('transports.index')->with('success', 'transport Update successfully');
    }
}
