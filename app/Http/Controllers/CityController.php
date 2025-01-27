<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities,name|max:255',
        ]);

        City::create(['name' => strtolower($request->name)]);
        return redirect()->route('cities.index')->with('success', 'City added successfully!');
    }
}

