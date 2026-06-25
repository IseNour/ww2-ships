<?php

namespace Database\Seeders;

use App\Models\Battle;
use Illuminate\Database\Seeder;

class BattleSeeder extends Seeder
{
    public function run(): void
    {
        $battles = [
            [
                'name' => 'Battle of Midway',
                'battle_date' => '1942-06-04',
                'battle_site' => 'Midway Atoll',
                'image_url' => '/storage/battles/midway.jpg',
                'description' => 'Turning point in the Pacific War. US Navy defeated the Japanese fleet, sinking four Japanese aircraft carriers.'
            ],
            [
                'name' => 'Battle of the Coral Sea',
                'battle_date' => '1942-05-04',
                'battle_site' => 'Coral Sea',
                'image_url' => '/storage/battles/coral-sea.gif',
                'description' => 'First carrier vs carrier battle in history. Both sides suffered heavy losses.'
            ],
            [
                'name' => 'Battle of Leyte Gulf',
                'battle_date' => '1944-10-23',
                'battle_site' => 'Philippines',
                'image_url' => '/storage/battles/leyte-gulf.png',
                'description' => 'Largest naval battle in history. The US Navy decisively defeated the Japanese fleet.'
            ],
            [
                'name' => 'Attack on Pearl Harbor',
                'battle_date' => '1941-12-07',
                'battle_site' => 'Pearl Harbor, Hawaii',
                'image_url' => '/storage/battles/pearl-harbor.jpg',
                'description' => 'Japanese surprise attack on US Pacific Fleet, bringing the United States into World War II.'
            ],
            [
                'name' => 'Battle of the Philippine Sea',
                'battle_date' => '1944-06-19',
                'battle_site' => 'Philippine Sea',
                'image_url' => '/storage/battles/philippine-sea.png',  // ← Fixed spelling
                'description' => 'The Great Marianas Turkey Shoot. US Navy destroyed over 400 Japanese aircraft.'
            ],
            [
                'name' => 'Battle of the Atlantic',
                'battle_date' => '1939-09-03',
                'battle_site' => 'Atlantic Ocean',
                'image_url' => '/storage/battles/atlantic.jpg',
                'description' => 'The longest continuous military campaign of World War II, lasting from 1939 to 1945.'
            ],
            [
                'name' => 'D-Day Naval Bombardment',
                'battle_date' => '1944-06-06',
                'battle_site' => 'Normandy, France',
                'image_url' => '/storage/battles/d-day.webp',
                'description' => 'Massive naval bombardment supporting the Allied invasion of Normandy.'
            ],
        ];

        foreach ($battles as $battle) {
            Battle::create($battle);
        }
    }
}