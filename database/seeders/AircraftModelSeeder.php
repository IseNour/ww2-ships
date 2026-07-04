<?php

namespace Database\Seeders;

use App\Models\AircraftModel;
use Illuminate\Database\Seeder;

class AircraftModelSeeder extends Seeder
{
    public function run(): void
    {
        $aircraft = [
            // ============================================
            // US FIGHTERS
            // ============================================

            [
                'name' => 'F4F Grumman Wildcat',
                'type_id' => 1,
                'country_id' => 1,
                'max_speed' => 318,
                'range' => 845,
                'armament' => '4 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1937-09-02',
                'introduced' => '1940-12-01',
                'description' => 'Primary US Navy fighter at the start of the war. Operated from USS Bunker Hill (CV-17), USS Yorktown (CV-5), USS Hornet (CV-8), and USS Ranger (CV-4).',
            ],
            [
                'name' => 'F4U Vought Corsair',
                'type_id' => 1,
                'country_id' => 1,
                'max_speed' => 417,
                'range' => 1005,
                'armament' => '6 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1940-05-29',
                'introduced' => '1942-12-28',
                'description' => 'Distinctive gull-wing fighter-bomber used by US Navy and Marines. Operated from USS Cabot (CVL-28).',
            ],
            [
                'name' => 'F6F Grumman Hellcat',
                'type_id' => 1,
                'country_id' => 1,
                'max_speed' => 330,
                'range' => 945,
                'armament' => '6 × .50 cal M2 Browning machine guns',
                'crew' => 1,
                'first_flight' => '1942-06-26',
                'introduced' => '1943-01-01',
                'description' => 'Primary US Navy fighter in the Pacific theater. Operated from USS Bunker Hill (CV-17), USS Intrepid (CV-11), USS Independence (CVL-22), USS Cowpens (CVL-25), USS Cabot (CVL-28), USS Franklin (CV-13), USS Ticonderoga (CV-14), and USS Hornet (CV-12).',
            ],
[
    'name' => 'Blackburn Skua',
    'type_id' => 3,
    'country_id' => 2,
    'max_speed' => 225,
    'range' => 470,
    'armament' => '4 × .303 Browning machine guns, 1 × .303 Vickers K machine gun, 1 × 500 lb bomb',
    'crew' => 2,
    'first_flight' => '1937-02-09',
    'introduced' => '1938-11-01',
    'description' => 'The Royal Navy\'s first monoplane carrier-based fighter and dive bomber. It famously scored the first aerial victory by a British aircraft in WWII and participated in the Norwegian Campaign.',
],
[
    'name' => 'Firefly Fairey',
    'type_id' => 1,
    'country_id' => 2,
    'max_speed' => 316,
    'range' => 810,
    'armament' => '4 × 20 mm Hispano Mk II cannons',
    'crew' => 2,
    'first_flight' => '1941-12-22',
    'introduced' => '1943-03-01',
    'description' => 'Carrier-based fighter and anti-submarine aircraft introduced during WWII. It served extensively with the British Pacific Fleet and remained in Royal Navy service after the war.',
],
[
    'name' => 'Gloster Gladiator',
    'type_id' => 1,
    'country_id' => 2,
    'max_speed' => 257,
    'range' => 440,
    'armament' => '4 × .303 Browning machine guns',
    'crew' => 1,
    'first_flight' => '1934-09-12',
    'introduced' => '1937-02-01',
    'description' => 'The RAF\'s last biplane fighter. It also served with the Royal Navy during the early years of WWII before being replaced by more modern fighters.',
],
[
    'name' => 'Gloster Sea Gladiator',
    'type_id' => 1,
    'country_id' => 2,
    'max_speed' => 253,
    'range' => 430,
    'armament' => '4 × .303 Browning machine guns',
    'crew' => 1,
    'first_flight' => '1938-01-01',
    'introduced' => '1938-12-01',
    'description' => 'Navalized version of the Gloster Gladiator equipped with an arrestor hook for aircraft carrier operations. It served during the Norwegian Campaign and the defence of Malta.',
],
[
    'name' => 'SB2C Curtiss Helldiver',
    'type_id' => 3,
    'country_id' => 1,
    'max_speed' => 295,
    'range' => 1165,
    'armament' => '2 × 20 mm cannons, 2 × .30 cal machine guns, up to 2,000 lb bombs or 1 torpedo',
    'crew' => 2,
    'first_flight' => '1940-12-18',
    'introduced' => '1943-11-01',
    'description' => 'American carrier-based dive bomber developed as the successor to the SBD Dauntless. It served extensively in the Pacific during the latter half of World War II, participating in major naval battles and ground attack missions.',
],
[
    'name' => 'FM-1 General Motors Wildcat',
    'type_id' => 1,
    'country_id' => 1,
    'max_speed' => 318,
    'range' => 845,
    'armament' => '4 × .50 cal Browning machine guns',
    'crew' => 1,
    'first_flight' => '1942-09-01',
    'introduced' => '1942-11-01',
    'description' => 'License-built version of the F4F Wildcat produced by General Motors. Primarily operated from escort carriers, providing fighter cover, convoy protection, and close air support during World War II.',
],
[
    'name' => 'FM-2 General Motors Wildcat',
    'type_id' => 1,
    'country_id' => 1,
    'max_speed' => 332,
    'range' => 845,
    'armament' => '4 × .50 cal Browning machine guns',
    'crew' => 1,
    'first_flight' => '1943-01-01',
    'introduced' => '1943-09-01',
    'description' => 'Improved version of the FM-1 with a more powerful engine and enhanced climb performance. It became the standard fighter aboard U.S. Navy escort carriers during the final years of World War II.',
],

            // ============================================
            // US DIVE BOMBERS
            // ============================================

            [
                'name' => 'SBD Douglas Dauntless',
                'type_id' => 3,
                'country_id' => 1,
                'max_speed' => 255,
                'range' => 773,
                'armament' => '2 × .50 cal machine guns, 2 × .30 cal machine guns',
                'crew' => 2,
                'first_flight' => '1940-05-01',
                'introduced' => '1940-11-01',
                'description' => 'US Navy dive bomber that sank many Japanese ships. Operated from USS Bunker Hill (CV-17), USS Yorktown (CV-5), USS Hornet (CV-8), USS Cowpens (CVL-25), and USS Ranger (CV-4).',
            ],
            [
                'name' => 'SB2C Curtiss Helldiver',
                'type_id' => 3,
                'country_id' => 1,
                'max_speed' => 295,
                'range' => 1100,
                'armament' => '2 × 20mm cannons, 2 × .50 cal machine guns',
                'crew' => 2,
                'first_flight' => '1940-12-18',
                'introduced' => '1942-11-01',
                'description' => 'US Navy dive bomber that replaced the SBD Dauntless. Operated from USS Bunker Hill (CV-17), USS Intrepid (CV-11), USS Cabot (CVL-28), USS Franklin (CV-13), USS Ticonderoga (CV-14), and USS Hornet (CV-12).',
            ],

            // ============================================
            // US TORPEDO BOMBERS
            // ============================================

            [
                'name' => 'TBD Devastator',
                'type_id' => 2,
                'country_id' => 1,
                'max_speed' => 206,
                'range' => 435,
                'armament' => '1 × .30 cal machine gun, 1 × 1000lb torpedo',
                'crew' => 3,
                'first_flight' => '1935-04-15',
                'introduced' => '1937-08-01',
                'description' => 'Obsolete US Navy torpedo bomber at the start of the war. Operated from USS Yorktown (CV-5) and USS Hornet (CV-8). Suffered heavy losses at Midway.',
            ],
            [
                'name' => 'TBF Grumman Avenger',
                'type_id' => 2,
                'country_id' => 1,
                'max_speed' => 275,
                'range' => 1000,
                'armament' => '1 × .50 cal machine gun, 2 × .30 cal machine guns',
                'crew' => 3,
                'first_flight' => '1941-08-07',
                'introduced' => '1942-01-01',
                'description' => 'Primary US Navy torpedo bomber. Operated from USS Bunker Hill (CV-17), USS Intrepid (CV-11), USS Independence (CVL-22), and USS Cowpens (CVL-25).',
            ],
            [
                'name' => 'TBM General Motors Avenger',
                'type_id' => 2,
                'country_id' => 1,
                'max_speed' => 275,
                'range' => 1000,
                'armament' => '1 × .50 cal machine gun, 2 × .30 cal machine guns',
                'crew' => 3,
                'first_flight' => '1941-08-07',
                'introduced' => '1942-01-01',
                'description' => 'US Navy torpedo bomber built by General Motors (TBM) as a license-built version of the TBF Avenger. Operated from USS Independence (CVL-22), USS Cabot (CVL-28), USS Franklin (CV-13), USS Ticonderoga (CV-14), and USS Hornet (CV-12).',
            ],

            // ============================================
            // US MEDIUM BOMBERS
            // ============================================

            [
                'name' => 'B-25B Mitchell',
                'type_id' => 4,
                'country_id' => 1,
                'max_speed' => 272,
                'range' => 1350,
                'armament' => '6 × .50 cal machine guns, 3000lb bombs, 1 × .30 nose gun ,2 × .50 dorsal guns, 1 × .50 ventral gun',
                'crew' => 6,
                'first_flight' => '1939-08-19',
                'introduced' => '1941-04-01',
                'description' => 'Twin-engine medium bomber made famous by the Doolittle Raid from USS Hornet (CV-8) in April 1942. First US bomber to strike the Japanese mainland.',
            ],

            // ============================================
            // US OBSERVATION / FLOATPLANES
            // ============================================

            [
                'name' => 'OS2U Vought Kingfisher',
                'type_id' => 5,
                'country_id' => 1,
                'max_speed' => 164,
                'range' => 805,
                'armament' => '2 × .30 cal machine guns, 2 × 100lb bombs or depth charges',
                'crew' => 2,
                'first_flight' => '1938-03-01',
                'introduced' => '1940-08-01',
                'description' => 'US Navy observation floatplane launched from catapults on battleships and cruisers.',
            ],
            [
                'name' => 'SOC Curtiss Seagull',
                'type_id' => 5,
                'country_id' => 1,
                'max_speed' => 165,
                'range' => 675,
                'armament' => '2 × .30 cal machine guns, 2 × 325lb bombs or depth charges',
                'crew' => 2,
                'first_flight' => '1934-04-01',
                'introduced' => '1935-11-01',
                'description' => 'US Navy observation floatplane used for scouting and gunfire spotting.',
            ],

            // ============================================
            // JAPANESE AIRCRAFT
            // ============================================

            [
                'name' => 'Mitsubishi A6M "Zero" (Zeke)',
                'type_id' => 1,
                'country_id' => 3,
                'max_speed' => 331,
                'range' => 1200,
                'armament' => '2 × 20mm cannons, 2 × 7.7mm machine guns',
                'crew' => 1,
                'first_flight' => '1939-04-01',
                'introduced' => '1940-07-01',
                'description' => 'Legendary Japanese fighter, extremely maneuverable and long-ranged.',
            ],
            [
                'name' => 'Aichi D3A "Val"',
                'type_id' => 3,
                'country_id' => 3,
                'max_speed' => 240,
                'range' => 850,
                'armament' => '2 × 7.7mm machine guns, 1 × 250kg bomb',
                'crew' => 2,
                'first_flight' => '1936-01-01',
                'introduced' => '1937-07-01',
                'description' => 'Primary Japanese dive bomber, used extensively at Pearl Harbor.',
            ],
            [
                'name' => 'Nakajima B5N "Kate"',
                'type_id' => 2,
                'country_id' => 3,
                'max_speed' => 235,
                'range' => 1020,
                'armament' => '1 × 7.7mm machine gun, 1 × 800kg torpedo',
                'crew' => 3,
                'first_flight' => '1937-01-01',
                'introduced' => '1938-01-01',
                'description' => 'Primary Japanese torpedo bomber, used at Pearl Harbor.',
            ],
            [
                'name' => 'Yokosuka D4Y "Judy"',
                'type_id' => 3,
                'country_id' => 3,
                'max_speed' => 343,
                'range' => 1450,
                'armament' => '2 × 7.7mm machine guns, 1 × 500kg bomb',
                'crew' => 2,
                'first_flight' => '1940-12-01',
                'introduced' => '1942-08-01',
                'description' => 'Fast Japanese dive bomber with excellent performance.',
            ],
            [
                'name' => 'Nakajima B6N "Jill"',
                'type_id' => 2,
                'country_id' => 3,
                'max_speed' => 300,
                'range' => 1000,
                'armament' => '1 × 7.7mm machine gun, 1 × 800kg torpedo',
                'crew' => 3,
                'first_flight' => '1941-05-01',
                'introduced' => '1943-05-01',
                'description' => 'Japanese torpedo bomber designed to replace the B5N "Kate".',
            ],

            // ============================================
            // BRITISH AIRCRAFT
            // ============================================

            [
                'name' => 'Swordfish Fairey',
                'type_id' => 2,
                'country_id' => 2,
                'max_speed' => 139,
                'range' => 546,
                'armament' => '1 × .303 machine gun, 1 × 730kg torpedo or 680kg bombs',
                'crew' => 3,
                'first_flight' => '1934-04-17',
                'introduced' => '1936-07-01',
                'description' => 'Obsolete but effective British torpedo bomber, famous for the attack on the Italian fleet at Taranto and the Bismarck chase.',
            ],
            [
                'name' => 'Fairey Fulmar',
                'type_id' => 1,
                'country_id' => 2,
                'max_speed' => 255,
                'range' => 780,
                'armament' => '8 × .303 Browning machine guns',
                'crew' => 2,
                'first_flight' => '1937-01-04',
                'introduced' => '1940-05-01',
                'description' => 'British carrier-based fighter and reconnaissance aircraft.',
            ],
            [
                'name' => 'Hawker Sea Hurricane',
                'type_id' => 1,
                'country_id' => 2,
                'max_speed' => 340,
                'range' => 600,
                'armament' => '8 × .303 Browning machine guns or 4 × 20mm cannons',
                'crew' => 1,
                'first_flight' => '1935-11-06',
                'introduced' => '1939-12-01',
                'description' => 'Navalized version of the famous Hawker Hurricane, Operated from Royal Navy aircraft carriers and CAM ships during Atlantic and Mediterranean operations.',
            ],
            [
                'name' => 'Supermarine Seafire',
                'type_id' => 1,
                'country_id' => 2,
                'max_speed' => 385,
                'range' => 700,
                'armament' => '2 × 20mm cannons, 4 × .303 machine guns',
                'crew' => 1,
                'first_flight' => '1941-06-07',
                'introduced' => '1942-01-01',
                'description' => 'Navalized version of the Spitfire, used on British carriers in the Mediterranean and Pacific.',
            ],
            [
                'name' => 'Fairey Barracuda',
                'type_id' => 3,
                'country_id' => 2,
                'max_speed' => 250,
                'range' => 686,
                'armament' => '2 × .303 machine guns, 1 × 730kg torpedo or 450kg bombs',
                'crew' => 3,
                'first_flight' => '1940-12-07',
                'introduced' => '1943-01-10',
                'description' => 'British carrier-based torpedo and dive bomber used extensively against the Tirpitz and in the Pacific.',
            ],
        ];

        foreach ($aircraft as $aircraftData) {
            AircraftModel::updateOrCreate(
                ['name' => $aircraftData['name']],
                $aircraftData
            );
        }

        $this->command->info('✅ Aircraft models processed successfully!');
        $this->command->info('📊 Total aircraft: ' . count($aircraft));
    }
}