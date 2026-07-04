<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // Base data seeders
            CountrySeeder::class,
            ShipTypeSeeder::class,
            AircraftTypeSeeder::class,
            ShipClassSeeder::class,
            AircraftModelSeeder::class,

            // Ship seeders (detailed)
            JapaneseShipsSeeder::class,
            AmericanShipsSeeder::class,

            // Additional data seeders
            ShipImageSeeder::class,
            BattleSeeder::class,
            BattleShipSeeder::class,
        ]);
    }
}