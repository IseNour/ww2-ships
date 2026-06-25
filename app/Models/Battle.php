<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'battle_date', 'battle_site', 'image_url', 'description'];

    protected $casts = [
        'battle_date' => 'date',
    ];

    public function ships()
    {
        return $this->belongsToMany(Ship::class)->withPivot('result')->withTimestamps();
    }
     public function getThumbnailAttribute()
    {
        return $this->image_url ?? '/images/placeholder-battle.jpg';
    }
}