<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Battle;
use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBattleController extends Controller
{
    /**
     * Display a listing of battles with search and filters.
     */
    public function index(Request $request)
    {
        $query = Battle::with(['ships']);

        // Search by name or location
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('battle_site', 'LIKE', "%{$search}%");
            });
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->where('battle_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->where('battle_date', '<=', $request->date_to);
        }

        // Sort
        $sortBy = $request->get('sort', 'battle_date');
        $sortOrder = $request->get('order', 'desc');
        $allowedSorts = ['name', 'battle_date', 'battle_site', 'created_at'];
        
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder);
        } else {
            $query->orderBy('battle_date', 'desc');
        }

        $battles = $query->paginate(15)->withQueryString();

        // Preserve filters for the view
        $filters = $request->all();

        return view('admin.battles.index', compact('battles', 'filters'));
    }

    /**
     * Show the form for creating a new battle.
     */
    public function create()
    {
        $ships = Ship::orderBy('name')->get();
        return view('admin.battles.create', compact('ships'));
    }

    /**
     * Store a newly created battle in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'battle_date' => 'required|date',
            'battle_site' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ships' => 'nullable|array',
            'ships.*' => 'exists:ships,id',
            'battle_results' => 'nullable|array',
            'ship_status' => 'nullable|array',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('battles', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        $battle = Battle::create($validated);

        // =============================================
        // ATTACH SHIPS WITH BATTLE_RESULT AND SHIP_STATUS
        // =============================================
        if ($request->has('ships')) {
            $syncData = [];
            $battleResults = $request->battle_results ?? [];
            $shipStatuses = $request->ship_status ?? [];
            
            foreach ($request->ships as $shipId) {
                // Only add if result is selected (not empty)
                if (empty($battleResults[$shipId])) {
                    continue;
                }
                
                $syncData[$shipId] = [
                    'battle_result' => $battleResults[$shipId],
                    'ship_status' => $shipStatuses[$shipId] ?? null,
                ];
            }
            
            $battle->ships()->attach($syncData);
        }

        return redirect()->route('admin.battles.index')
                         ->with('success', 'Battle "' . $battle->name . '" created successfully!');
    }

    /**
     * Display the specified battle.
     */
    public function show(string $id)
    {
        $battle = Battle::with(['ships', 'ships.class', 'ships.class.country'])
                        ->findOrFail($id);
        
        return view('admin.battles.show', compact('battle'));
    }

    /**
     * Show the form for editing the specified battle.
     */
    public function edit(string $id)
    {
        $battle = Battle::with(['ships'])->findOrFail($id);
        $ships = Ship::orderBy('name')->get();
        
        return view('admin.battles.edit', compact('battle', 'ships'));
    }

    /**
     * Update the specified battle in storage.
     */
    public function update(Request $request, string $id)
    {
        $battle = Battle::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'battle_date' => 'required|date',
            'battle_site' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ships' => 'nullable|array',
            'ships.*' => 'exists:ships,id',
            'battle_results' => 'nullable|array',
            'ship_status' => 'nullable|array',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($battle->image_url) {
                $oldPath = str_replace('/storage/', '', $battle->image_url);
                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                }
            }
            
            $path = $request->file('image')->store('battles', 'public');
            $validated['image_url'] = '/storage/' . $path;
        }

        $battle->update($validated);

        // =============================================
        // UPDATE SHIP ASSOCIATIONS WITH BATTLE_RESULT AND SHIP_STATUS
        // =============================================
        if ($request->has('ships')) {
            $syncData = [];
            $battleResults = $request->battle_results ?? [];
            $shipStatuses = $request->ship_status ?? [];
            
            foreach ($request->ships as $shipId) {
                // Only add if result is selected (not empty)
                if (empty($battleResults[$shipId])) {
                    continue;
                }
                
                $syncData[$shipId] = [
                    'battle_result' => $battleResults[$shipId],
                    'ship_status' => $shipStatuses[$shipId] ?? null,
                ];
            }
            
            $battle->ships()->sync($syncData);
        } else {
            $battle->ships()->detach();
        }

        return redirect()->route('admin.battles.show', $battle)
                         ->with('success', 'Battle "' . $battle->name . '" updated successfully!');
    }

    /**
     * Remove the specified battle from storage.
     */
    public function destroy(string $id)
    {
        $battle = Battle::findOrFail($id);
        
        // Delete image if exists
        if ($battle->image_url) {
            $oldPath = str_replace('/storage/', '', $battle->image_url);
            if (Storage::disk('public')->exists($oldPath)) {
                Storage::disk('public')->delete($oldPath);
            }
        }
        
        // Detach all ships
        $battle->ships()->detach();
        
        $battleName = $battle->name;
        $battle->delete();
        
        return redirect()->route('admin.battles.index')
                         ->with('success', 'Battle "' . $battleName . '" deleted successfully!');
    }
}