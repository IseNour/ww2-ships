<?php

namespace Database\Seeders;

use App\Models\AircraftModel;
use Illuminate\Database\Seeder;

class AircraftModelSeeder extends Seeder
{
    public function run(): void
    {
        $aircraft = [
            // US Aircraft
            [
                'name' => 'F6F Hellcat',
                'type_id' => 1,
                'country_id' => 1,
                'max_speed' => 330,
                'range' => 945,
                'armament' => '6 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1942-06-26',
                'introduced' => '1943-01-01',
                'description' => 'Primary US Navy fighter in the Pacific theater'
            ],
            [
                'name' => 'F4U Corsair',
                'type_id' => 1,
                'country_id' => 1,
                'max_speed' => 417,
                'range' => 1005,
                'armament' => '6 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1940-05-29',
                'introduced' => '1942-12-28',
                'description' => 'Distinctive gull-wing fighter used by US Navy and Marines'
            ],
            [
                'name' => 'SBD Dauntless',
                'type_id' => 3,
                'country_id' => 1,
                'max_speed' => 255,
                'range' => 773,
                'armament' => '2 × .50 cal machine guns, 2 × .30 cal machine guns',
                'crew' => 2,
                'first_flight' => '1940-05-01',
                'introduced' => '1940-11-01',
                'description' => 'US Navy dive bomber that sank many Japanese ships'
            ],
            [
                'name' => 'TBF Avenger',
                'type_id' => 2,
                'country_id' => 1,
                'max_speed' => 275,
                'range' => 1000,
                'armament' => '1 × .50 cal machine gun, 2 × .30 cal machine guns',
                'crew' => 3,
                'first_flight' => '1941-08-07',
                'introduced' => '1942-01-01',
                'description' => 'US Navy torpedo bomber'
            ],
            // Japanese Aircraft
            [
                'name' => 'A6M Zero',
                'type_id' => 1,
                'country_id' => 3,
                'max_speed' => 331,
                'range' => 1200,
                'armament' => '2 × 20mm cannons, 2 × 7.7mm machine guns',
                'crew' => 1,
                'first_flight' => '1939-04-01',
                'introduced' => '1940-07-01',
                'description' => 'Legendary Japanese fighter'
            ],
            [
                'name' => 'D3A Val',
                'type_id' => 3,
                'country_id' => 3,
                'max_speed' => 240,
                'range' => 850,
                'armament' => '2 × 7.7mm machine guns, 1 × 250kg bomb',
                'crew' => 2,
                'first_flight' => '1936-01-01',
                'introduced' => '1937-07-01',
                'description' => 'Japanese dive bomber used at Pearl Harbor'
            ],
            [
                'name' => 'B5N Kate',
                'type_id' => 2,
                'country_id' => 3,
                'max_speed' => 235,
                'range' => 1020,
                'armament' => '1 × 7.7mm machine gun, 1 × 800kg torpedo',
                'crew' => 3,
                'first_flight' => '1937-01-01',
                'introduced' => '1938-01-01',
                'description' => 'Japanese torpedo bomber used at Pearl Harbor'
            ],
        ];

        foreach ($aircraft as $aircraftData) {
            AircraftModel::create($aircraftData);
        }
    }
}