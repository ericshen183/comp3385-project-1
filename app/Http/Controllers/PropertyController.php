<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property; // Add this line

class PropertyController extends Controller
{
    public function create()
    {
        return view('property-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'storeys' => 'required',
            'garages' => 'required',
        ]);
        
        Property::create($request->all()); // Add this line back

        return redirect()->route('property.index')
            ->with('success', 'Property created successfully.');
    }
}
