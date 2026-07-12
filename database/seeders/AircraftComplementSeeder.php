<?php

namespace Database\Seeders;

use App\Models\Ship;
use App\Models\AircraftModel;
use Illuminate\Database\Seeder;

class AircraftComplementSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // JAPANESE CARRIER AIRCRAFT COMPLEMENTS
        // ============================================

        $japaneseCarriers = [
            // Shōkaku Class
            [
                'ship_name' => 'Shōkaku',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 27],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 27],
                ]
            ],
            [
                'ship_name' => 'Zuikaku',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 27],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 27],
                ]
            ],
            // Akagi
            [
                'ship_name' => 'Akagi',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 18],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 27],
                ]
            ],
            // Sōryū
            [
                'ship_name' => 'Sōryū',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 18],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 18],
                ]
            ],
            // Hiryū
            [
                'ship_name' => 'Hiryū',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 18],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 18],
                ]
            ],
            // Kaga
            [
                'ship_name' => 'Kaga',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 27],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 27],
                ]
            ],
            // Hiyō
            [
                'ship_name' => 'Hiyō',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 21],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 18],
                    ['name' => 'Nakajima B6N "Jill"', 'quantity' => 18],
                ]
            ],
            // Junyō
            [
                'ship_name' => 'Junyō',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 21],
                    ['name' => 'Aichi D3A "Val"', 'quantity' => 18],
                    ['name' => 'Nakajima B6N "Jill"', 'quantity' => 18],
                ]
            ],
            // Shōhō
            [
                'ship_name' => 'Shōhō',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 12],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 9],
                ]
            ],
            // Zuihō
            [
                'ship_name' => 'Zuihō',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 18],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 9],
                ]
            ],
            // Taihō
            [
                'ship_name' => 'Taihō',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 27],
                    ['name' => 'Yokosuka D4Y "Judy"', 'quantity' => 18],
                    ['name' => 'Nakajima B6N "Jill"', 'quantity' => 27],
                ]
            ],
            // Chiyoda
            [
                'ship_name' => 'Chiyoda',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 21],
                    ['name' => 'Nakajima B6N "Jill"', 'quantity' => 9],
                ]
            ],
            // Chitose
            [
                'ship_name' => 'Chitose',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 21],
                    ['name' => 'Nakajima B6N "Jill"', 'quantity' => 9],
                ]
            ],
            // Ryūjō
            [
                'ship_name' => 'Ryūjō',
                'aircraft' => [
                    ['name' => 'Mitsubishi A6M "Zero" (Zeke)', 'quantity' => 24],
                    ['name' => 'Nakajima B5N "Kate"', 'quantity' => 12],
                ]
            ],
        ];

        // ============================================
        // AMERICAN CARRIER AIRCRAFT COMPLEMENTS
        // ============================================

        $americanCarriers = [
            // Yorktown Class
            [
                'ship_name' => 'USS Enterprise (CV-6)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'USS Yorktown (CV-5)',
                'aircraft' => [
                    ['name' => 'F4F Grumman Wildcat', 'quantity' => 18],
                    ['name' => 'SBD Dauntless', 'quantity' => 18],
                    ['name' => 'TBD Devastator', 'quantity' => 13],
                ]
            ],
            [
                'ship_name' => 'USS Hornet (CV-8)',
                'aircraft' => [
                    ['name' => 'F4F Grumman Wildcat', 'quantity' => 27],
                    ['name' => 'SBD Dauntless', 'quantity' => 35],
                    ['name' => 'TBD Devastator', 'quantity' => 15],
                ]
            ],
            // Essex Class (Long Hull)
            [
                'ship_name' => 'USS Hornet (CV-12)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'USS Intrepid (CV-11)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            // Essex Class (Short Hull)
            [
                'ship_name' => 'USS Franklin (CV-13)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'USS Bunker Hill (CV-17)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'USS Randolph (CV-15)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'USS Hancock (CV-19)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'USS Ticonderoga (CV-14)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 36],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            // Lexington Class
            [
                'ship_name' => 'USS Lexington (CV-2)',
                'aircraft' => [
                    ['name' => 'F4F Grumman Wildcat', 'quantity' => 18],
                    ['name' => 'SBD Dauntless', 'quantity' => 37],
                    ['name' => 'TBD Devastator', 'quantity' => 13],
                ]
            ],
            [
                'ship_name' => 'USS Saratoga (CV-3)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 36],
                    ['name' => 'SB2C Helldiver', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            // Wasp Class
            [
                'ship_name' => 'USS Wasp (CV-7)',
                'aircraft' => [
                    ['name' => 'F4F Grumman Wildcat', 'quantity' => 27],
                    ['name' => 'SBD Dauntless', 'quantity' => 36],
                    ['name' => 'TBD Devastator', 'quantity' => 18],
                ]
            ],
            // Independence Class
            [
                'ship_name' => 'USS Independence (CVL-22)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'USS Princeton (CVL-23)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'USS Belleau Wood (CVL-24)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'USS Cowpens (CVL-25)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'USS Monterey (CVL-26)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'USS Cabot (CVL-28)',
                'aircraft' => [
                    ['name' => 'F6F Grumman Hellcat', 'quantity' => 24],
                    ['name' => 'TBM Avenger', 'quantity' => 9],
                ]
            ],
            // Ranger Class
            [
                'ship_name' => 'USS Ranger (CV-4)',
                'aircraft' => [
                    ['name' => 'F4F Grumman Wildcat', 'quantity' => 27],
                    ['name' => 'SBD Dauntless', 'quantity' => 27],
                    ['name' => 'TBF Avenger', 'quantity' => 18],
                ]
            ],
            // Midway Class
            [
                'ship_name' => 'USS Midway (CV-41)',
                'aircraft' => [
                    ['name' => 'F4U Vought Corsair', 'quantity' => 65],
                    ['name' => 'SB2C Helldiver', 'quantity' => 35],
                    ['name' => 'TBM Avenger', 'quantity' => 18],
                ]
            ],
            // Casablanca Class (Escort Carriers)
            [
                'ship_name' => 'USS Gambier Bay (CVE-73)',
                'aircraft' => [
                    ['name' => 'FM-2 General Motors Wildcat', 'quantity' => 16],
                    ['name' => 'TBM Avenger', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'USS St. Lo (CVE-63)',
                'aircraft' => [
                    ['name' => 'FM-2 General Motors Wildcat', 'quantity' => 16],
                    ['name' => 'TBM Avenger', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'USS White Plains (CVE-66)',
                'aircraft' => [
                    ['name' => 'FM-2 General Motors Wildcat', 'quantity' => 16],
                    ['name' => 'TBM Avenger', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'USS Kitkun Bay (CVE-71)',
                'aircraft' => [
                    ['name' => 'FM-2 General Motors Wildcat', 'quantity' => 16],
                    ['name' => 'TBM Avenger', 'quantity' => 12],
                ]
            ],
        ];

        // ============================================
        // BRITISH CARRIER AIRCRAFT COMPLEMENTS
        // ============================================

        $britishCarriers = [
            // Fleet Carriers
            [
                'ship_name' => 'HMS Ark Royal (91)',
                'aircraft' => [
                    ['name' => 'Blackburn Skua', 'quantity' => 18],
                    ['name' => 'Fairey Fulmar', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Illustrious (87)',
                'aircraft' => [
                    ['name' => 'Fairey Fulmar', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Formidable (67)',
                'aircraft' => [
                    ['name' => 'Fairey Fulmar', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Victorious (38)',
                'aircraft' => [
                    ['name' => 'Fairey Fulmar', 'quantity' => 24],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                    ['name' => 'Fairey Barracuda', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Indomitable (92)',
                'aircraft' => [
                    ['name' => 'Hawker Sea Hurricane', 'quantity' => 24],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                    ['name' => 'Fairey Barracuda', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Implacable (R86)',
                'aircraft' => [
                    ['name' => 'Supermarine Seafire', 'quantity' => 24],
                    ['name' => 'Fairey Firefly', 'quantity' => 21],
                    ['name' => 'Fairey Barracuda', 'quantity' => 21],
                ]
            ],
            [
                'ship_name' => 'HMS Indefatigable (R10)',
                'aircraft' => [
                    ['name' => 'Supermarine Seafire', 'quantity' => 24],
                    ['name' => 'Fairey Firefly', 'quantity' => 21],
                    ['name' => 'Fairey Barracuda', 'quantity' => 21],
                ]
            ],
            [
                'ship_name' => 'HMS Hermes (95)',
                'aircraft' => [
                    ['name' => 'Fairey Swordfish', 'quantity' => 15],
                    ['name' => 'Fairey Fulmar', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'HMS Glorious',
                'aircraft' => [
                    ['name' => 'Gloster Gladiator', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Courageous',
                'aircraft' => [
                    ['name' => 'Gloster Sea Gladiator', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Furious (47)',
                'aircraft' => [
                    ['name' => 'Blackburn Skua', 'quantity' => 18],
                    ['name' => 'Fairey Fulmar', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Eagle (1918)',
                'aircraft' => [
                    ['name' => 'Blackburn Skua', 'quantity' => 18],
                    ['name' => 'Fairey Swordfish', 'quantity' => 18],
                ]
            ],
            [
                'ship_name' => 'HMS Argus (I49)',
                'aircraft' => [
                    ['name' => 'Blackburn Skua', 'quantity' => 12],
                    ['name' => 'Fairey Swordfish', 'quantity' => 12],
                ]
            ],

            // Colossus Class
            [
                'ship_name' => 'HMS Warrior (R31)',
                'aircraft' => [
                    ['name' => 'Supermarine Seafire', 'quantity' => 24],
                    ['name' => 'Fairey Firefly', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'HMS Theseus (R64)',
                'aircraft' => [
                    ['name' => 'Supermarine Seafire', 'quantity' => 24],
                    ['name' => 'Fairey Firefly', 'quantity' => 12],
                ]
            ],

            // Escort Carriers
            [
                'ship_name' => 'HMS Chaser (D32)',
                'aircraft' => [
                    ['name' => 'Hawker Sea Hurricane', 'quantity' => 16],
                    ['name' => 'Fairey Swordfish', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'HMS Vindex (D15)',
                'aircraft' => [
                    ['name' => 'Fairey Swordfish', 'quantity' => 12],
                    ['name' => 'Fairey Firefly', 'quantity' => 12],
                ]
            ],
            [
                'ship_name' => 'HMS Emperor (D98)',
                'aircraft' => [
                    ['name' => 'Supermarine Seafire', 'quantity' => 24],
                    ['name' => 'Fairey Swordfish', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'HMS Stalker (D91)',
                'aircraft' => [
                    ['name' => 'Supermarine Seafire', 'quantity' => 24],
                    ['name' => 'Fairey Swordfish', 'quantity' => 9],
                ]
            ],
            [
                'ship_name' => 'HMS Tracker (D24)',
                'aircraft' => [
                    ['name' => 'Fairey Swordfish', 'quantity' => 12],
                    ['name' => 'Fairey Firefly', 'quantity' => 12],
                ]
            ],
        ];

        // ============================================
        // PROCESS ALL CARRIERS
        // ============================================

        $this->command->info('========================================');
        $this->command->info('🛫 Adding Aircraft Complements');
        $this->command->info('========================================');

        // Process Japanese Carriers
        $this->command->info('');
        $this->command->info('🇯🇵 Japanese Carriers:');

        foreach ($japaneseCarriers as $carrierData) {
            $this->processCarrier($carrierData);
        }

        // Process American Carriers
        $this->command->info('');
        $this->command->info('🇺🇸 American Carriers:');

        foreach ($americanCarriers as $carrierData) {
            $this->processCarrier($carrierData);
        }

        // Process British Carriers
        $this->command->info('');
        $this->command->info('🇬🇧 British Carriers:');

        foreach ($britishCarriers as $carrierData) {
            $this->processCarrier($carrierData);
        }

        // ============================================
        // CARRIERS WITH NO AIR GROUP
        // ============================================

        $this->command->info('');
        $this->command->info('========================================');
        $this->command->info('📋 Carriers with NO air group (skipped):');
        $this->command->info('========================================');
        $this->command->info('   🇯🇵 Shinano - Sunk before entering service');
        $this->command->info('   🇯🇵 Ise - Hybrid conversion, never operated air group');
        $this->command->info('   🇯🇵 Hyūga - Hybrid conversion, never operated air group');
        $this->command->info('   🇯🇵 Ibuki - Never completed');
        $this->command->info('   🇯🇵 Katsuragi - Never operated full combat air group');
        $this->command->info('   🇯🇵 Hōshō - Training carrier only');
        $this->command->info('   🇺🇸 USS Langley (CV-1) - Converted to seaplane tender, no wartime air group');
        $this->command->info('   🇬🇧 HMS Perseus (R51) - Aircraft maintenance carrier, no combat air group');
        $this->command->info('   🇬🇧 HMS Unicorn (I72) - Aircraft maintenance carrier, no combat air group');
        $this->command->info('   🇬🇧 HMS Albion (R07) - Completed after WWII');
        $this->command->info('');
        $this->command->info('✅ Aircraft complement seeder completed successfully!');
    }

    /**
     * Process a single carrier's aircraft complement
     */
    private function processCarrier(array $carrierData): void
    {
        $ship = Ship::where('name', $carrierData['ship_name'])->first();

        if (!$ship) {
            $this->command->warn("⚠️ Ship '{$carrierData['ship_name']}' not found. Skipping.");
            return;
        }

        if (!$ship->is_aircraft_carrier) {
            $this->command->warn("⚠️ Ship '{$carrierData['ship_name']}' is not marked as an aircraft carrier. Skipping.");
            return;
        }

        // Clear existing aircraft
        $ship->aircraftModels()->detach();

        // Add new aircraft
        $addedCount = 0;
        foreach ($carrierData['aircraft'] as $aircraftData) {
            $aircraft = AircraftModel::where('name', $aircraftData['name'])->first();

            if (!$aircraft) {
                $this->command->warn("⚠️ Aircraft '{$aircraftData['name']}' not found for '{$carrierData['ship_name']}'. Skipping.");
                continue;
            }

            $ship->aircraftModels()->attach($aircraft->id, [
                'quantity' => $aircraftData['quantity'],
                'start_date' => null,
                'notes' => null,
            ]);

            $addedCount++;
        }

        $this->command->info("✅ Added {$addedCount} aircraft types to {$carrierData['ship_name']}");
    }
}