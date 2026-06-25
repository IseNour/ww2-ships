<?php

namespace Database\Seeders;

use App\Models\AircraftType;
use Illuminate\Database\Seeder;

class AircraftTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['name' => 'Fighter', 'description' => 'Air superiority fighter aircraft'],
            ['name' => 'Torpedo Bomber', 'description' => 'Aircraft designed to attack ships with torpedoes'],
            ['name' => 'Dive Bomber', 'description' => 'Aircraft that dive to deliver bombs with precision'],
            ['name' => 'Reconnaissance', 'description' => 'Aircraft used for scouting and intelligence'],
        ];

        foreach ($types as $type) {
            AircraftType::create($type);
        }
    }
}