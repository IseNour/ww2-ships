<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ship;
use App\Models\Battle;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'total_ships' => Ship::count(),
            'total_battles' => Battle::count(),
            'total_countries' => Country::count(),
            'carriers' => Ship::where('is_aircraft_carrier', true)->count(),
            'total_users' => User::count(),
            'recent_ships' => Ship::with(['class', 'class.country'])
                                   ->orderBy('created_at', 'desc')
                                   ->limit(5)
                                   ->get(),
            'recent_battles' => Battle::orderBy('created_at', 'desc')
                                      ->limit(5)
                                      ->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}