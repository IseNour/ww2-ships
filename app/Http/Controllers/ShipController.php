<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Models\ShipClass;
use App\Models\Country;
use App\Models\ShipType;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of ships with search and filters.
     */
    public function index(Request $request)
    {
        // Start query with eager loading
        $query = Ship::with(['class', 'class.country', 'images','aircraftModels']);

        // 1. Search by ship name or description or class name or country name
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhereHas('class', function($cq) use ($search) {
                      $cq->where('name', 'LIKE', "%{$search}%");
                  })
                  ->orWhereHas('class.country', function($cq) use ($search) {
                      $cq->where('name', 'LIKE', "%{$search}%");
                  });
            });
        }

        // 2. Filter by country
        if ($request->filled('country')) {
            $query->whereHas('class', function($q) use ($request) {
                $q->where('country_id', $request->country);
            });
        }

        // 3. Filter by ship type
        if ($request->filled('type')) {
            $query->whereHas('class', function($q) use ($request) {
                $q->where('type_id', $request->type);
            });
        }

        // 4. Filter by aircraft carrier status
        if ($request->filled('carrier')) {
            $query->where('is_aircraft_carrier', $request->carrier == 'yes');
        }

        // 5. Filter by year range (launch date)
        if ($request->filled('year_from')) {
            $query->whereYear('launch_date', '>=', $request->year_from);
        }
        if ($request->filled('year_to')) {
            $query->whereYear('launch_date', '<=', $request->year_to);
        }

        // 6. Filter by displacement range
        if ($request->filled('displacement_min')) {
            $query->where('displacement', '>=', $request->displacement_min);
        }
        if ($request->filled('displacement_max')) {
            $query->where('displacement', '<=', $request->displacement_max);
        }

        // Sort and paginate
        $sortBy = $request->get('sort', 'name');
        $sortOrder = $request->get('order', 'asc');
        $allowedSorts = ['name', 'launch_date', 'displacement', 'max_speed', 'crew'];
        
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder);
        } else {
            $query->orderBy('name', 'asc');
        }

        $ships = $query->paginate(12)->withQueryString();

        // Get data for filters
        $countries = Country::orderBy('name')->get();
        $shipTypes = ShipType::orderBy('name')->get();
        
        // Get min/max years for slider
        $yearMin = Ship::min('launch_date') ? date('Y', strtotime(Ship::min('launch_date'))) : 1900;
        $yearMax = Ship::max('launch_date') ? date('Y', strtotime(Ship::max('launch_date'))) : 1945;
        
        // Preserve search/filter values for the view
        $filters = $request->all();

        return view('ships.index', compact('ships', 'countries', 'shipTypes', 'yearMin', 'yearMax', 'filters'));
    }

    /**
     * Display the specified ship (public view).
     */
    public function show($id)
    {
        $ship = Ship::with([
            'class',
            'class.country',
            'images',
            'battles',
            'aircraftModels',
            'aircraftModels.type'
        ])->findOrFail($id);
        
        return view('ships.show', compact('ship'));
    }

    /**
     * Display all aircraft carriers.
     */
    public function carriers(Request $request)
    {
        $request->merge(['carrier' => 'yes']);
        return $this->index($request);
    }

    /**
     * Display all battleships.
     */
    public function battleships(Request $request)
    {
        $battleshipType = ShipType::where('name', 'Battleship')->first();
        if ($battleshipType) {
            $request->merge(['type' => $battleshipType->id]);
        }
        return $this->index($request);
    }

    /**
     * Filter ships by country.
     */
    public function byCountry($countryId, Request $request)
    {
        $request->merge(['country' => $countryId]);
        return $this->index($request);
    }

    /**
     * Advanced search with JSON response for AJAX.
     */
    public function searchAjax(Request $request)
    {
        $query = Ship::with(['class', 'class.country', 'images']);

        if ($request->filled('q')) {
            $search = $request->q;
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhereHas('class', function($cq) use ($search) {
                      $cq->where('name', 'LIKE', "%{$search}%");
                  });
        }

        $ships = $query->limit(10)->get();
        return response()->json($ships);
    }
}