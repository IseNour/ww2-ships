<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            ShipTypeSeeder::class,
            AircraftTypeSeeder::class,
            ShipClassSeeder::class,
            AircraftModelSeeder::class,
            ShipSeeder::class,
            ShipImageSeeder::class,
            BattleSeeder::class,
            BattleShipSeeder::class,
        ]);
    }
}