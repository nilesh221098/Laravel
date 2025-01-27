<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::with('city')->get();
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        $cities = City::all();
        return view('pages.create', compact('cities'));
    }

   /* public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'city_id' => 'required|exists:cities,id',
        ]);

        Page::create($request->all());
        return redirect()->route('pages.index')->with('success', 'Page created successfully!');
    }*/


    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'city_id' => 'required|array|exists:cities,id',
        ]);
    
        foreach ($request->city_id as $city_id) {
            $city = City::find($city_id);
            $url = strtolower(str_replace(' ', '-', $request->name)) . '-' . strtolower(str_replace(' ', '-', $city->name));
    
            $existingPage = Page::where('url', $url)->first();
            if ($existingPage) {
                //$url = $url . '-' . uniqid();
                continue;
            }
    
            Page::create([
                'name' => $request->name,
                'description' => $request->description,
                'city_id' => $city_id,
                'url' => $url, 
            ]);
        }
    
        return redirect()->route('pages.index')->with('success', 'Pages created successfully!');
    }
    

public function show($url)
{
    $page = Page::where('url', $url)->firstOrFail();

    return view('pages.show', compact('page'));
}

    public function edit(Page $page)
    {
        $cities = City::all();
        return view('pages.edit', compact('page', 'cities'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'city_id' => 'required|exists:cities,id',
        ]);

        $page->update($request->all());
        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully!');
    }

}
