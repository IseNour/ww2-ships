<?php

namespace Database\Seeders;

use App\Models\AircraftModel;
use App\Models\AircraftType;
use App\Models\Country;
use Illuminate\Database\Seeder;

class AdditionalAircraftSeeder extends Seeder
{
    public function run(): void
    {
        // Get countries
        $usa = Country::where('name', 'United States')->first();
        $japan = Country::where('name', 'Japan')->first();
        $uk = Country::where('name', 'United Kingdom')->first();

        // Get aircraft types
        $fighter = AircraftType::where('name', 'Fighter')->first();
        $torpedoBomber = AircraftType::where('name', 'Torpedo Bomber')->first();
        $diveBomber = AircraftType::where('name', 'Dive Bomber')->first();
        $reconnaissance = AircraftType::where('name', 'Reconnaissance')->first();

        $aircraft = [
            // === Japanese Aircraft ===
            [
                'name' => 'Mitsubishi A6M "Zero" (Zeke)',
                'type_id' => $fighter->id,
                'country_id' => $japan->id,
                'max_speed' => 331,
                'range' => 1200,
                'armament' => '2 × 20mm cannons, 2 × 7.7mm machine guns',
                'crew' => 1,
                'first_flight' => '1939-04-01',
                'introduced' => '1940-07-01',
                'description' => 'Legendary Japanese fighter, extremely maneuverable and long-ranged'
            ],
            [
                'name' => 'Aichi D3A "Val"',
                'type_id' => $diveBomber->id,
                'country_id' => $japan->id,
                'max_speed' => 240,
                'range' => 850,
                'armament' => '2 × 7.7mm machine guns, 1 × 250kg bomb',
                'crew' => 2,
                'first_flight' => '1936-01-01',
                'introduced' => '1937-07-01',
                'description' => 'Primary Japanese dive bomber, used extensively at Pearl Harbor'
            ],
            [
                'name' => 'Nakajima B5N "Kate"',
                'type_id' => $torpedoBomber->id,
                'country_id' => $japan->id,
                'max_speed' => 235,
                'range' => 1020,
                'armament' => '1 × 7.7mm machine gun, 1 × 800kg torpedo',
                'crew' => 3,
                'first_flight' => '1937-01-01',
                'introduced' => '1938-01-01',
                'description' => 'Primary Japanese torpedo bomber, used at Pearl Harbor'
            ],
            [
                'name' => 'Yokosuka D4Y "Judy"',
                'type_id' => $diveBomber->id,
                'country_id' => $japan->id,
                'max_speed' => 343,
                'range' => 1450,
                'armament' => '2 × 7.7mm machine guns, 1 × 500kg bomb',
                'crew' => 2,
                'first_flight' => '1940-12-01',
                'introduced' => '1942-08-01',
                'description' => 'Fast Japanese dive bomber with excellent performance'
            ],
            [
                'name' => 'Nakajima B6N "Jill"',
                'type_id' => $torpedoBomber->id,
                'country_id' => $japan->id,
                'max_speed' => 300,
                'range' => 1000,
                'armament' => '1 × 7.7mm machine gun, 1 × 800kg torpedo',
                'crew' => 3,
                'first_flight' => '1941-05-01',
                'introduced' => '1943-05-01',
                'description' => 'Japanese torpedo bomber designed to replace the B5N Kate'
            ],

            // === US Aircraft ===
            [
                'name' => 'Grumman F4F Wildcat',
                'type_id' => $fighter->id,
                'country_id' => $usa->id,
                'max_speed' => 318,
                'range' => 845,
                'armament' => '4 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1937-09-02',
                'introduced' => '1940-12-01',
                'description' => 'Primary US Navy fighter at the start of the war'
            ],
            [
                'name' => 'Douglas SBD Dauntless',
                'type_id' => $diveBomber->id,
                'country_id' => $usa->id,
                'max_speed' => 255,
                'range' => 773,
                'armament' => '2 × .50 cal machine guns, 2 × .30 cal machine guns',
                'crew' => 2,
                'first_flight' => '1940-05-01',
                'introduced' => '1940-11-01',
                'description' => 'US Navy dive bomber that sank many Japanese ships'
            ],
            [
                'name' => 'Grumman F6F Hellcat',
                'type_id' => $fighter->id,
                'country_id' => $usa->id,
                'max_speed' => 330,
                'range' => 945,
                'armament' => '6 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1942-06-26',
                'introduced' => '1943-01-01',
                'description' => 'Primary US Navy fighter in the Pacific theater'
            ],
            [
                'name' => 'Vought F4U Corsair',
                'type_id' => $fighter->id,
                'country_id' => $usa->id,
                'max_speed' => 417,
                'range' => 1005,
                'armament' => '6 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1940-05-29',
                'introduced' => '1942-12-28',
                'description' => 'Distinctive gull-wing fighter-bomber used by US Navy and Marines'
            ],
            [
                'name' => 'Grumman TBF Avenger',
                'type_id' => $torpedoBomber->id,
                'country_id' => $usa->id,
                'max_speed' => 275,
                'range' => 1000,
                'armament' => '1 × .50 cal machine gun, 2 × .30 cal machine guns',
                'crew' => 3,
                'first_flight' => '1941-08-07',
                'introduced' => '1942-01-01',
                'description' => 'Primary US Navy torpedo bomber'
            ],

            // === British Aircraft ===
            [
                'name' => 'Fairey Swordfish',
                'type_id' => $torpedoBomber->id,
                'country_id' => $uk->id,
                'max_speed' => 139,
                'range' => 546,
                'armament' => '1 × .303 machine gun, 1 × 730kg torpedo or 680kg bombs',
                'crew' => 3,
                'first_flight' => '1934-04-17',
                'introduced' => '1936-07-01',
                'description' => 'Obsolete but effective British torpedo bomber, famous for Taranto raid'
            ],
            [
                'name' => 'Fairey Fulmar',
                'type_id' => $fighter->id,
                'country_id' => $uk->id,
                'max_speed' => 255,
                'range' => 780,
                'armament' => '8 × .303 Browning machine guns',
                'crew' => 2,
                'first_flight' => '1937-01-04',
                'introduced' => '1940-05-01',
                'description' => 'British carrier-based fighter and reconnaissance aircraft'
            ],
            [
                'name' => 'Hawker Sea Hurricane',
                'type_id' => $fighter->id,
                'country_id' => $uk->id,
                'max_speed' => 340,
                'range' => 600,
                'armament' => '8 × .303 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1935-11-06',
                'introduced' => '1939-12-01',
                'description' => 'Navalized version of the famous Hawker Hurricane, used on carriers'
            ],
            [
                'name' => 'Supermarine Seafire',
                'type_id' => $fighter->id,
                'country_id' => $uk->id,
                'max_speed' => 385,
                'range' => 700,
                'armament' => '2 × 20mm cannons, 4 × .303 machine guns',
                'crew' => 1,
                'first_flight' => '1941-06-07',
                'introduced' => '1942-01-01',
                'description' => 'Navalized version of the Spitfire, used on British carriers'
            ],
            [
                'name' => 'Fairey Barracuda',
                'type_id' => $diveBomber->id,
                'country_id' => $uk->id,
                'max_speed' => 250,
                'range' => 686,
                'armament' => '2 × .303 machine guns, 1 × 730kg torpedo or 450kg bombs',
                'crew' => 3,
                'first_flight' => '1940-12-07',
                'introduced' => '1943-01-10',
                'description' => 'British torpedo and dive bomber used in the Mediterranean'
            ],
        ];

        foreach ($aircraft as $aircraftData) {
            // Check if aircraft already exists (by name)
            $existing = AircraftModel::where('name', $aircraftData['name'])->first();
            
            if (!$existing) {
                AircraftModel::create($aircraftData);
                $this->command->info('✅ Added: ' . $aircraftData['name']);
            } else {
                $this->command->info('⏭️ Skipped: ' . $aircraftData['name'] . ' (already exists)');
            }
        }

        $this->command->info('🎉 Aircraft import complete!');
    }
}