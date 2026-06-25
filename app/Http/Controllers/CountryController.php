<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::withCount(['shipClasses', 'aircraftModels'])
                            ->orderBy('name')
                            ->get();
        
        return view('countries.index', compact('countries'));
    }

    public function show($id)
    {
        $country = Country::with(['shipClasses', 'shipClasses.ships', 'shipClasses.type', 'aircraftModels', 'aircraftModels.type'])
                          ->findOrFail($id);
        
        return view('countries.show', compact('country'));
    }
}