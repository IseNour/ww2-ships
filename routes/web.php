<?php

use App\Http\Controllers\ShipController;
use App\Http\Controllers\BattleController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\ShipClassController;  // ← ADD THIS

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminShipController;
use App\Http\Controllers\Admin\AdminBattleController;
use App\Http\Controllers\Admin\AdminCountryController;
use App\Http\Controllers\Admin\AdminClassController;  // ← ADD THIS
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AircraftController;  // ← ADD THIS

// Public routes (read-only)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Redirect default dashboard to admin dashboard
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/aircraft', [AircraftController::class, 'index'])->name('aircraft.index');
Route::get('/aircraft/{id}', [AircraftController::class, 'show'])->name('aircraft.show');

// Public ship routes
Route::get('/ships', [ShipController::class, 'index'])->name('ships.index');
Route::get('/ships/{id}', [ShipController::class, 'show'])->name('ships.show');
Route::get('/carriers', [ShipController::class, 'carriers'])->name('ships.carriers');
Route::get('/battleships', [ShipController::class, 'battleships'])->name('ships.battleships');
Route::get('/ships/search', [ShipController::class, 'search'])->name('ships.search');
Route::get('/country/{id}/ships', [ShipController::class, 'byCountry'])->name('ships.by-country');

// Public battle routes
Route::get('/battles', [BattleController::class, 'index'])->name('battles.index');
Route::get('/battles/{id}', [BattleController::class, 'show'])->name('battles.show');
Route::get('/battles/search', [BattleController::class, 'search'])->name('battles.search');

// Public country routes
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/{id}', [CountryController::class, 'show'])->name('countries.show');

// Search ships (AJAX)
Route::get('/ships/search-ajax', [ShipController::class, 'searchAjax'])->name('ships.search-ajax');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public class routes (add these with your other public routes)
Route::get('/classes', [ShipClassController::class, 'index'])->name('classes.index');
Route::get('/classes/{id}', [ShipClassController::class, 'show'])->name('classes.show');
// Admin routes (full CRUD)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('ships', AdminShipController::class);
    Route::resource('battles', AdminBattleController::class);
    Route::resource('countries', AdminCountryController::class);
    Route::resource('classes', AdminClassController::class);  // ← ADD THIS
});

require __DIR__.'/auth.php';