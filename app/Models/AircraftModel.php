<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AircraftModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type_id', 'country_id', 'max_speed', 'range',
        'armament', 'crew', 'first_flight', 'introduced', 'description'
    ];

    protected $casts = [
        'first_flight' => 'date',
        'introduced' => 'date',
    ];

    public function type()
    {
        return $this->belongsTo(AircraftType::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function ships()
    {
        return $this->belongsToMany(Ship::class, 'ship_aircraft')
                    ->withPivot('quantity', 'start_date', 'end_date', 'notes')
                    ->withTimestamps();
    }
}