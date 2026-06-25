<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class AdminCountryController extends Controller
{
    /**
     * Display a listing of countries.
     */
    public function index()
    {
        $countries = Country::withCount(['shipClasses', 'aircraftModels'])
                            ->orderBy('name')
                            ->paginate(15);  // ← Changed from get() to paginate()
        
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new country.
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created country in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:countries',
            'flag' => 'nullable|string|max:255',
        ]);

        Country::create($validated);

        return redirect()->route('admin.countries.index')
                         ->with('success', 'Country "' . $validated['name'] . '" created successfully!');
    }

    /**
     * Display the specified country.
     */
    public function show(string $id)
    {
        $country = Country::with(['shipClasses', 'shipClasses.ships', 'aircraftModels'])
                          ->findOrFail($id);
        
        return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified country.
     */
    public function edit(string $id)
    {
        $country = Country::findOrFail($id);
        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified country in storage.
     */
    public function update(Request $request, string $id)
    {
        $country = Country::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:countries,name,' . $id,
            'flag' => 'nullable|string|max:255',
        ]);

        $country->update($validated);

        return redirect()->route('admin.countries.show', $country)
                         ->with('success', 'Country "' . $country->name . '" updated successfully!');
    }

    /**
     * Remove the specified country from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::findOrFail($id);
        
        // Check if country has related data
        if ($country->shipClasses()->count() > 0) {
            return redirect()->route('admin.countries.index')
                             ->with('error', 'Cannot delete country "' . $country->name . '" because it has associated ships!');
        }
        
        $countryName = $country->name;
        $country->delete();
        
        return redirect()->route('admin.countries.index')
                         ->with('success', 'Country "' . $countryName . '" deleted successfully!');
    }
}