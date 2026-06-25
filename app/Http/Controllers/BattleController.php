<?php

namespace App\Http\Controllers;

use App\Models\Battle;
use Illuminate\Http\Request;

class BattleController extends Controller
{
    /**
     * Display a listing of battles.
     */
    public function index()
    {
        $battles = Battle::with(['ships', 'ships.class', 'ships.class.country'])
                         ->orderBy('battle_date', 'desc')
                         ->paginate(10);
        
        return view('battles.index', compact('battles'));
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


public function search(Request $request)
{
    $search = $request->input('search');
    
    $battles = Battle::with(['ships'])
                     ->where('name', 'LIKE', "%{$search}%")
                     ->orWhere('battle_site', 'LIKE', "%{$search}%")
                     ->orWhere('description', 'LIKE', "%{$search}%")
                     ->orderBy('battle_date', 'desc')
                     ->paginate(10);
    
    return view('battles.index', compact('battles', 'search'));
}
}