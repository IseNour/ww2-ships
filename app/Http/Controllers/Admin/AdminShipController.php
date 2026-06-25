<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ship;
use App\Models\ShipClass;
use App\Models\ShipImage;
use App\Models\ShipAircraft;
use App\Models\AircraftModel;
use App\Models\Battle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminShipController extends Controller
{
    /**
     * Display a listing of ships.
     */
    public function index()
    {
        $ships = Ship::with(['class', 'class.country', 'images'])
                     ->orderBy('created_at', 'desc')
                     ->paginate(15);
        
        return view('admin.ships.index', compact('ships'));
    }

    /**
     * Show the form for creating a new ship.
     */
    public function create()
    {
        $classes = ShipClass::with('country')->orderBy('name')->get();
        $aircraftModels = AircraftModel::with('type')->orderBy('name')->get();
        $battles = Battle::orderBy('name')->get();
        
        return view('admin.ships.create', compact('classes', 'aircraftModels', 'battles'));
    }

    /**
     * Store a newly created ship in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('aircraft')) {
        $aircraft = array_filter($request->aircraft, function($item) {
            return !empty($item['model_id']) && !empty($item['quantity']);
        });
        $request->merge(['aircraft' => array_values($aircraft)]); // Re-index array
    }
       $validated = $request->validate([
        'name' => 'required|string|max:255',
        'class_id' => 'required|exists:classes,id',
        'launch_date' => 'nullable|date',
        'commission_date' => 'nullable|date',
        'displacement' => 'nullable|numeric|min:0|max:999999',
        'length' => 'nullable|numeric|min:0|max:999.99',
        'beam' => 'nullable|numeric|min:0|max:99.99',
        'draft' => 'nullable|numeric|min:0|max:99.99',
        'max_speed' => 'nullable|numeric|min:0|max:99.99',  // ← MAX 99.99 knots
        'crew' => 'nullable|integer|min:0|max:10000',
        'fate' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:1000',
        'is_aircraft_carrier' => 'boolean',
        'images' => 'nullable|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'aircraft' => 'nullable|array',
        'aircraft.*.model_id' => 'nullable|exists:aircraft_models,id',
        'aircraft.*.quantity' => 'nullable|integer|min:1',
        'battles' => 'nullable|array',
        'battles.*' => 'exists:battles,id',
        'battle_results' => 'nullable|array',
    ], [
        'max_speed.max' => 'Max speed cannot exceed 99.99 knots.',
        'beam.max' => 'Beam cannot exceed 99.99 meters.',
        'draft.max' => 'Draft cannot exceed 99.99 meters.',
        'displacement.max' => 'Displacement cannot exceed 999,999 tons.',
        'crew.max' => 'Crew cannot exceed 10,000 sailors.',
    ]);

        // Create ship
        $ship = Ship::create($validated);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('ships', 'public');
                ShipImage::create([
                    'ship_id' => $ship->id,
                    'image_url' => '/storage/' . $path,
                    'caption' => $request->input('caption', ''),
                ]);
            }
        }

        // Attach aircraft if carrier
        if ($request->has('aircraft') && $ship->is_aircraft_carrier) {
            foreach ($request->aircraft as $aircraft) {
                if (!empty($aircraft['model_id']) && !empty($aircraft['quantity'])) {
                    // Format start_date
                    $startDate = null;
                    if (!empty($aircraft['start_date'])) {
                        $year = preg_replace('/[^0-9]/', '', $aircraft['start_date']);
                        if (strlen($year) == 4) {
                            $startDate = $year . '-01-01';
                        } else {
                            $startDate = $aircraft['start_date'];
                        }
                    }
                    
                    $ship->aircraftModels()->attach($aircraft['model_id'], [
                        'quantity' => $aircraft['quantity'],
                        'start_date' => $startDate,
                        'notes' => $aircraft['notes'] ?? null,
                    ]);
                }
            }
        }

        // Attach battles
        if ($request->has('battles')) {
            foreach ($request->battles as $index => $battleId) {
                $result = $request->battle_results[$index] ?? 'Unknown';
                $ship->battles()->attach($battleId, ['result' => $result]);
            }
        }

        return redirect()->route('admin.ships.index')
                         ->with('success', 'Ship "' . $ship->name . '" created successfully!');
    }

    /**
     * Display the specified ship.
     */
    public function show(string $id)
    {
        $ship = Ship::with([
            'class',
            'class.country',
            'images',
            'battles',
            'aircraftModels',
            'aircraftModels.type'
        ])->findOrFail($id);
        
        return view('admin.ships.show', compact('ship'));
    }

    /**
     * Show the form for editing the specified ship.
     */
    public function edit(string $id)
    {
        $ship = Ship::with(['images', 'battles', 'aircraftModels'])->findOrFail($id);
        $classes = ShipClass::with('country')->orderBy('name')->get();
        $aircraftModels = AircraftModel::with('type')->orderBy('name')->get();
        $battles = Battle::orderBy('name')->get();
        
        return view('admin.ships.edit', compact('ship', 'classes', 'aircraftModels', 'battles'));
    }

    /**
     * Update the specified ship in storage.
     */
    public function update(Request $request, string $id)
    {
        $ship = Ship::findOrFail($id);
         if ($request->has('aircraft')) {
        $aircraft = array_filter($request->aircraft, function($item) {
            return !empty($item['model_id']) && !empty($item['quantity']);
        });
        $request->merge(['aircraft' => array_values($aircraft)]); // Re-index array
    }
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'class_id' => 'required|exists:classes,id',
        'launch_date' => 'nullable|date',
        'commission_date' => 'nullable|date',
        'displacement' => 'nullable|numeric|min:0|max:999999',
        'length' => 'nullable|numeric|min:0|max:999.99',
        'beam' => 'nullable|numeric|min:0|max:99.99',
        'draft' => 'nullable|numeric|min:0|max:99.99',
        'max_speed' => 'nullable|numeric|min:0|max:99.99',  
        'crew' => 'nullable|integer|min:0|max:10000',
        'fate' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:1000',
        'is_aircraft_carrier' => 'boolean',
        'images' => 'nullable|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'aircraft' => 'nullable|array',
        'aircraft.*.model_id' => 'nullable|exists:aircraft_models,id',
        'aircraft.*.quantity' => 'nullable|integer|min:1',
        'battles' => 'nullable|array',
        'battles.*' => 'exists:battles,id',
        'battle_results' => 'nullable|array',
    ], [
        'max_speed.max' => 'Max speed cannot exceed 99.99 knots.',
        'beam.max' => 'Beam cannot exceed 99.99 meters.',
        'draft.max' => 'Draft cannot exceed 99.99 meters.',
        'displacement.max' => 'Displacement cannot exceed 999,999 tons.',
        'crew.max' => 'Crew cannot exceed 10,000 sailors.',
    ]);

        $ship->update($validated);

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('ships', 'public');
                ShipImage::create([
                    'ship_id' => $ship->id,
                    'image_url' => '/storage/' . $path,
                    'caption' => $request->input('caption', ''),
                ]);
            }
        }

        // Delete images
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = ShipImage::find($imageId);
                if ($image && $image->ship_id == $ship->id) {
                    $filePath = str_replace('/storage/', '', $image->image_url);
                    Storage::disk('public')->delete($filePath);
                    $image->delete();
                }
            }
        }

        // =============================================
        // UPDATE AIRCRAFT COMPLEMENT
        // =============================================
        if ($request->has('aircraft')) {
            // Remove all existing aircraft
            $ship->aircraftModels()->detach();
            
            // Add new aircraft
            foreach ($request->aircraft as $aircraft) {
                if (!empty($aircraft['model_id']) && !empty($aircraft['quantity'])) {
                    // Format start_date
                    $startDate = null;
                    if (!empty($aircraft['start_date'])) {
                        $year = preg_replace('/[^0-9]/', '', $aircraft['start_date']);
                        if (strlen($year) == 4) {
                            $startDate = $year . '-01-01';
                        } else {
                            $startDate = $aircraft['start_date'];
                        }
                    }
                    
                    $ship->aircraftModels()->attach($aircraft['model_id'], [
                        'quantity' => $aircraft['quantity'],
                        'start_date' => $startDate,
                        'notes' => $aircraft['notes'] ?? null,
                    ]);
                }
            }
        } else {
            // If no aircraft selected, remove all
            $ship->aircraftModels()->detach();
        }

        // Update battles
        if ($request->has('battles')) {
            $ship->battles()->detach();
            foreach ($request->battles as $index => $battleId) {
                $result = $request->battle_results[$index] ?? 'Unknown';
                $ship->battles()->attach($battleId, ['result' => $result]);
            }
        }

        return redirect()->route('admin.ships.show', $ship)
                         ->with('success', 'Ship "' . $ship->name . '" updated successfully!');
    }

    /**
     * Remove the specified ship from storage.
     */
    public function destroy(string $id)
    {
        $ship = Ship::findOrFail($id);
        
        // Delete associated images
        foreach ($ship->images as $image) {
            $filePath = str_replace('/storage/', '', $image->image_url);
            Storage::disk('public')->delete($filePath);
            $image->delete();
        }
        
        // Detach all relationships
        $ship->battles()->detach();
        $ship->aircraftModels()->detach();
        
        $shipName = $ship->name;
        $ship->delete();
        
        return redirect()->route('admin.ships.index')
                         ->with('success', 'Ship "' . $shipName . '" deleted successfully!');
    }
}