<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index ()
    {
        $hotels = Hotel:: all();
        return view('Hotels.index', compact('hotels'));
    }
    public function PageAddHotel ()
    {
        return view('Hotels.create');
    }
    public function AddHotel (Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Hotel::create($request->all());

        return redirect()->route('index')->with('success', 'Hotel created successfully');
    }
    
    
}
