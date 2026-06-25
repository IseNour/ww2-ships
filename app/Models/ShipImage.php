<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipImage extends Model
{
    use HasFactory;

    protected $fillable = ['ship_id', 'image_url', 'caption'];

    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }
}