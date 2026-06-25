<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipClass extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = ['name', 'country_id', 'type_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function type()
    {
        return $this->belongsTo(ShipType::class);
    }

   public function ships()
{
    return $this->hasMany(Ship::class, 'class_id');
}
}