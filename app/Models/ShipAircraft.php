<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipAircraft extends Model
{
    use HasFactory;

    protected $table = 'ship_aircraft';

    protected $fillable = [
        'ship_id', 'aircraft_model_id', 'quantity',
        'start_date', 'end_date', 'notes'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }

    public function aircraftModel()
    {
        return $this->belongsTo(AircraftModel::class);
    }
}