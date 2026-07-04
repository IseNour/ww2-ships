<?php

namespace App\Http\Controllers;

use App\Models\AircraftModel;
use App\Models\Country;
use App\Models\AircraftType;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of aircraft with search and filters.
     */
    public function index(Request $request)
    {
        $query = AircraftModel::with(['type', 'country']);

        // Search by name or description
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // Filter by country
        if ($request->filled('country')) {
            $query->where('country_id', $request->country);
        }

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type_id', $request->type);
        }

        // Sort
        $sortBy = $request->get('sort', 'name');
        $sortOrder = $request->get('order', 'asc');
        $allowedSorts = ['name', 'max_speed', 'range', 'crew', 'first_flight', 'introduced'];
        
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder);
        } else {
            $query->orderBy('name', 'asc');
        }

        $aircraft = $query->paginate(20)->withQueryString();

        // Get data for filters
        $countries = Country::orderBy('name')->get();
        $types = AircraftType::orderBy('name')->get();
        
        // Preserve filters for the view
        $filters = $request->all();

        return view('aircraft.index', compact('aircraft', 'countries', 'types', 'filters'));
    }

    /**
     * Display the specified aircraft.
     */
    public function show($id)
    {
        $aircraft = AircraftModel::with([
            'type',
            'country',
            'ships'  // Ships that carry this aircraft
        ])->findOrFail($id);
        
        return view('aircraft.show', compact('aircraft'));
    }

    /**
     * Display aircraft by country.
     */
    public function byCountry($countryId, Request $request)
    {
        $request->merge(['country' => $countryId]);
        return $this->index($request);
    }

    /**
     * Display aircraft by type.
     */
    public function byType($typeId, Request $request)
    {
        $request->merge(['type' => $typeId]);
        return $this->index($request);
    }

    /**
     * AJAX search for aircraft (for autocomplete).
     */
    public function searchAjax(Request $request)
    {
        $query = AircraftModel::with(['type', 'country']);

        if ($request->filled('q')) {
            $search = $request->q;
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $aircraft = $query->limit(10)->get();
        return response()->json($aircraft);
    }
}