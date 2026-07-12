<?php

namespace App\Http\Controllers;

use App\Models\ShipClass;
use App\Models\Country;
use App\Models\ShipType;
use Illuminate\Http\Request;

class ShipClassController extends Controller
{
    /**
     * Display a listing of all ship classes.
     */
    public function index(Request $request)
    {
        $query = ShipClass::with(['country', 'type', 'ships']);

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhereHas('country', function($cq) use ($search) {
                      $cq->where('name', 'LIKE', "%{$search}%");
                  });
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

        $classes = $query->orderBy('name')->paginate(20)->withQueryString();

        $countries = Country::orderBy('name')->get();
        $types = ShipType::orderBy('name')->get();

        return view('classes.index', compact('classes', 'countries', 'types'));
    }

    /**
     * Display the specified ship class and its ships.
     */
    public function show($id)
    {
        $class = ShipClass::with([
            'country',
            'type',
            'ships',
            'ships.images',
            'ships.battles'
        ])->findOrFail($id);

        return view('classes.show', compact('class'));
    }
}