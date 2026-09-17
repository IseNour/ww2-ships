<?php

namespace Database\Seeders;

use App\Models\Battle;
use Illuminate\Database\Seeder;

class MissingBattlesSeeder extends Seeder
{
    public function run(): void
    {
        $battles = [
            // ============================================
            // SOUTH ATLANTIC
            // ============================================

            [
                'name' => 'Battle of the River Plate',
                'battle_date' => '1939-12-13',
                'battle_site' => 'River Plate, South Atlantic',
                'description' => 'The first major naval battle of World War II. The German pocket battleship Admiral Graf Spee engaged the British cruisers HMS Exeter, HMS Ajax, and HMNZS Achilles. After being damaged, Graf Spee sought refuge in Montevideo, Uruguay, and was later scuttled by her captain. The battle marked the end of German surface raider operations in the South Atlantic and was a significant morale boost for the Allies early in the war.',
            ],

            // ============================================
            // NORTH ATLANTIC
            // ============================================

            [
                'name' => 'Pursuit and sinking of Bismarck',
                'battle_date' => '1941-05-24',
                'battle_site' => 'North Atlantic Ocean',
                'description' => 'One of the most famous naval chases in history. After Bismarck sank HMS Hood in the Denmark Strait, the Royal Navy launched a relentless pursuit across the North Atlantic. British forces finally intercepted and sank the German battleship on 27 May 1941, with the loss of over 2,000 German sailors. The operation demonstrated the importance of naval intelligence and carrier-based air power in modern naval warfare.',
            ],
            [
                'name' => 'Battle of North Atlantic Convoy JW 55B',
                'battle_date' => '1943-12-20',
                'battle_site' => 'North Atlantic, Arctic Ocean',
                'description' => 'A major Arctic convoy battle that was closely linked to the Battle of the North Cape. Convoy JW 55B was attacked by the German battleship Scharnhorst, leading to the decisive engagement that resulted in Scharnhorst\'s sinking. The convoy reached the Soviet Union safely, delivering vital supplies to support the Soviet war effort.',
            ],

            // ============================================
            // PACIFIC THEATER - SOLOMON ISLANDS
            // ============================================

            [
                'name' => 'Battle of Savo Island',
                'battle_date' => '1942-08-09',
                'battle_site' => 'Savo Island, Solomon Islands',
                'description' => 'The first major naval battle of the Guadalcanal campaign. In a devastating night attack, Japanese cruisers and destroyers surprised and sank four Allied cruisers: USS Astoria, USS Quincy, USS Vincennes, and HMAS Canberra. The battle was one of the worst defeats in US naval history and demonstrated the superiority of Japanese night-fighting tactics. Over 1,000 Allied sailors were killed.',
            ],
            [
                'name' => 'Battle of Cape Esperance',
                'battle_date' => '1942-10-11',
                'battle_site' => 'Cape Esperance, Guadalcanal, Solomon Islands',
                'description' => 'A night naval battle during the Guadalcanal campaign. In one of the first American night victories of the Pacific War, US cruisers and destroyers intercepted and sank the Japanese heavy cruiser Furutaka and destroyer Fubuki. The battle was a tactical victory for the US, though the Japanese successfully delivered reinforcements to Guadalcanal.',
            ],
            [
                'name' => 'Battle of Rennell Island',
                'battle_date' => '1943-01-29',
                'battle_site' => 'Rennell Island, Solomon Islands',
                'description' => 'The last major naval engagement of the Guadalcanal campaign. Japanese naval aircraft attacked American ships covering the withdrawal of troops from Guadalcanal. The heavy cruiser USS Chicago was sunk by torpedo bombers, marking the end of the Japanese attempt to regain control of the Solomon Islands. The battle was a strategic victory for the Allies, securing their hold on Guadalcanal.',
            ],

            // ============================================
            // ALEUTIAN ISLANDS
            // ============================================

            [
                'name' => 'Battle of Komandorski Islands',
                'battle_date' => '1943-03-26',
                'battle_site' => 'Komandorski Islands, Bering Sea',
                'description' => 'A rare daylight surface engagement in the Aleutian Islands campaign. US cruisers and destroyers engaged a superior Japanese force attempting to resupply the Aleutian Islands. The battle ended in a tactical draw, but the Japanese withdrew, ending their attempts to reinforce the Aleutian Islands. It was the last major surface engagement between US and Japanese forces in the North Pacific.',
            ],
        ];

        foreach ($battles as $battleData) {
            Battle::updateOrCreate(
                ['name' => $battleData['name']],
                [
                    'battle_date' => $battleData['battle_date'],
                    'battle_site' => $battleData['battle_site'],
                    'description' => $battleData['description'],
                    'image_url' => null,
                ]
            );
        }

        $this->command->info('✅ Missing battles seeded successfully!');
        $this->command->info('📊 Added ' . count($battles) . ' new battles');
    }
}