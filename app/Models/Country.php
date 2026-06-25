<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'flag'];

    public function shipClasses()
    {
        return $this->hasMany(ShipClass::class);
    }

    public function aircraftModels()
    {
        return $this->hasMany(AircraftModel::class);
    }
}