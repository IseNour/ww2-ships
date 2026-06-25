<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Models\Battle;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Statistics
        $totalShips = Ship::count();
        $totalBattles = Battle::count();
        $totalCountries = Country::count();
        $carriers = Ship::where('is_aircraft_carrier', true)->count();
        
        // Featured ships for slideshow (10 ships)
        $featuredShips = Ship::with(['class', 'class.country', 'images'])
                             ->orderBy('created_at', 'desc')
                             ->limit(10)
                             ->get();
        
        // Recent battles for below the description
        $recentBattles = Battle::orderBy('battle_date', 'desc')->limit(4)->get();
        
        return view('home', compact(
            'totalShips',
            'totalBattles',
            'totalCountries',
            'carriers',
            'featuredShips',
            'recentBattles'
        ));
    }
}