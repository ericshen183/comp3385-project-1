<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function create()
    {
        return view('property-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'price' => 'required',
            'type' => 'required',
            'location' => 'required',
            'photo' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Property::create($data);

        return redirect()->route('property.index')
            ->with('success', 'Property created successfully.');
    }

    public function index()
    {
        $properties = Property::all();

        return view('properties', compact('properties'));
    }

    public function show($property_id)
    {
        $property = Property::findOrFail($property_id);

        return view('property-show', compact('property'));
    }
}
