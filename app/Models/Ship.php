<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'class_id', 'launch_date', 'commission_date',
        'displacement', 'length', 'beam', 'draft', 'max_speed',
        'crew', 'fate', 'description', 'is_aircraft_carrier'
    ];

    protected $casts = [
        'launch_date' => 'date',
        'commission_date' => 'date',
        'is_aircraft_carrier' => 'boolean',
    ];

    // Relationships
   public function class()
{
    return $this->belongsTo(ShipClass::class, 'class_id');
}

    public function images()
    {
        return $this->hasMany(ShipImage::class);
    }

    public function battles()
    {
        return $this->belongsToMany(Battle::class)->withPivot('result')->withTimestamps();
    }

    public function aircraft()
    {
        return $this->hasMany(ShipAircraft::class);
    }

    public function aircraftModels()
    {
        return $this->belongsToMany(AircraftModel::class, 'ship_aircraft')
                    ->withPivot('quantity', 'start_date', 'end_date', 'notes')
                    ->withTimestamps();
    }

    // Helper methods
    public function isCarrier(): bool
    {
        return $this->is_aircraft_carrier;
    }

    /**
 * Get featured ships for the homepage slideshow.
 */
public static function getFeaturedShips()
{
    // You can manually specify which ships to feature by ID
    $featuredIds = [1, 2, 3, 4, 5, 6, 7]; // Adjust these IDs
    
    return self::with(['class', 'class.country', 'images'])
               ->whereIn('id', $featuredIds)
               ->orderByRaw("FIELD(id, " . implode(',', $featuredIds) . ")")
               ->get();
}

    public function getTotalAircraftAttribute()
    {
        return $this->aircraft()->sum('quantity');
    }

    // THIS IS THE IMPORTANT ONE - For your thumbnail idea!
    public function getThumbnailAttribute()
    {
        // Get the first image URL, or return a default placeholder
        return $this->images->first()?->image_url ?? '/images/placeholder-ship.jpg';
    }

    // Get all images for the gallery
    public function getGalleryAttribute()
    {
        return $this->images;
    }
}