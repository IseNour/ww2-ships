<?php

namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Seeder;

class ShipJsonSeeder extends Seeder
{
    public function run(): void
    {
        $json = file_get_contents(database_path('data/ships.json'));
        $ships = json_decode($json, true);

        foreach ($ships as $shipData) {
            // Add new OR update existing
            Ship::updateOrCreate(
                ['name' => $shipData['name']],
                $shipData
            );
            
            $this->command->info('✅ Processed: ' . $shipData['name']);
        }

        $this->command->info('🎉 Import complete!');
    }
}