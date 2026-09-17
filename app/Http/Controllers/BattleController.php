<?php

namespace App\Http\Controllers;

use App\Models\Battle;
use Illuminate\Http\Request;

class BattleController extends Controller
{
    /**
     * Display a listing of battles with search and filters.
     */
    public function index(Request $request)
    {
        $query = Battle::with(['ships', 'ships.class', 'ships.class.country']);

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
        $sortOrder = $request->get('order', 'asc');
        $allowedSorts = ['name', 'battle_date', 'battle_site'];
        
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder);
        } else {
            $query->orderBy('battle_date', 'asc');
        }

        $battles = $query->paginate(12)->withQueryString();

        // Preserve filters for the view
        $filters = $request->all();

        return view('battles.index', compact('battles', 'filters'));
    }

    /**
     * Display the specified battle.
     */
    public function show($id)
    {
        $battle = Battle::with(['ships', 'ships.class', 'ships.class.country', 'ships.images'])
                        ->findOrFail($id);
        
        return view('battles.show', compact('battle'));
    }

    /**
     * Search battles (legacy method - redirects to index with search parameter).
     */
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        return redirect()->route('battles.index', ['search' => $search]);
    }
}