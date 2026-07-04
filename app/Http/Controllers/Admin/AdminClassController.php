<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShipClass;
use App\Models\Country;
use App\Models\ShipType;
use Illuminate\Http\Request;

class AdminClassController extends Controller
{
    /**
     * Display a listing of ship classes with search and filters.
     */
    public function index(Request $request)  // ← Add Request parameter
    {
        $query = ShipClass::with(['country', 'type', 'ships']);

        // Search by class name or country name
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

        // Sort
        $sortBy = $request->get('sort', 'name');
        $sortOrder = $request->get('order', 'asc');
        $allowedSorts = ['name', 'year_from', 'year_to', 'total_built', 'created_at'];
        
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder);
        } else {
            $query->orderBy('name', 'asc');
        }

        $classes = $query->paginate(15)->withQueryString();

        // Get data for filters
        $countries = Country::orderBy('name')->get();
        $types = ShipType::orderBy('name')->get();
        
        // Preserve filters
        $filters = $request->all();

        return view('admin.classes.index', compact('classes', 'countries', 'types', 'filters'));
    }

    /**
     * Show the form for creating a new ship class.
     */
    public function create()
    {
        $countries = Country::orderBy('name')->get();
        $types = ShipType::orderBy('name')->get();
        
        return view('admin.classes.create', compact('countries', 'types'));
    }

    /**
     * Store a newly created ship class.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classes',
            'country_id' => 'required|exists:countries,id',
            'type_id' => 'required|exists:ship_types,id',
            'description' => 'nullable|string|max:1000',
            'year_from' => 'nullable|integer|min:1800|max:2025',
            'year_to' => 'nullable|integer|min:1800|max:2025',
            'total_built' => 'nullable|integer|min:0',
        ]);

        $class = ShipClass::create($validated);

        return redirect()->route('admin.classes.index')
                         ->with('success', 'Class "' . $class->name . '" created successfully!');
    }

    /**
     * Display the specified ship class.
     */
    public function show(string $id)
    {
        $class = ShipClass::with(['country', 'type', 'ships', 'ships.images'])
                          ->findOrFail($id);
        
        return view('admin.classes.show', compact('class'));
    }

    /**
     * Show the form for editing the specified ship class.
     */
    public function edit(string $id)
    {
        $class = ShipClass::findOrFail($id);
        $countries = Country::orderBy('name')->get();
        $types = ShipType::orderBy('name')->get();
        
        return view('admin.classes.edit', compact('class', 'countries', 'types'));
    }

    /**
     * Update the specified ship class.
     */
    public function update(Request $request, string $id)
    {
        $class = ShipClass::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classes,name,' . $id,
            'country_id' => 'required|exists:countries,id',
            'type_id' => 'required|exists:ship_types,id',
            'description' => 'nullable|string|max:1000',
            'year_from' => 'nullable|integer|min:1800|max:2025',
            'year_to' => 'nullable|integer|min:1800|max:2025',
            'total_built' => 'nullable|integer|min:0',
        ]);

        $class->update($validated);

        return redirect()->route('admin.classes.show', $class)
                         ->with('success', 'Class "' . $class->name . '" updated successfully!');
    }

    /**
     * Remove the specified ship class.
     */
    public function destroy(string $id)
    {
        $class = ShipClass::findOrFail($id);
        
        // Check if class has ships
        if ($class->ships()->count() > 0) {
            return redirect()->route('admin.classes.index')
                             ->with('error', 'Cannot delete class "' . $class->name . '" because it has ships!');
        }
        
        $className = $class->name;
        $class->delete();
        
        return redirect()->route('admin.classes.index')
                         ->with('success', 'Class "' . $className . '" deleted successfully!');
    }
}