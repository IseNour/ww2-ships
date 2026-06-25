<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function shipClasses()
    {
        return $this->hasMany(ShipClass::class);
    }
}