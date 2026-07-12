<?php

namespace Database\Seeders;

use App\Models\ShipType;
use Illuminate\Database\Seeder;

class ShipTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            'Battleship',
            'Aircraft Carrier',
            'Cruiser',
            'Destroyer',
            'Submarine',
            'Battlecruiser',
            'Escort Carrier',
        ];

        foreach ($types as $type) {
            ShipType::create(['name' => $type]);
        }
    }
}