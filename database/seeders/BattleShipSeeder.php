<?php

namespace Database\Seeders;

use App\Models\Battle;
use App\Models\Ship;
use Illuminate\Database\Seeder;

class BattleShipSeeder extends Seeder
{
    public function run(): void
    {
        // Attach ships to battles
        $battles = Battle::all();
        
        // Battle of Midway (id: 1)
        $midway = Battle::find(1);
        $midway->ships()->attach(2, ['result' => 'Victory']); // USS Enterprise
        $midway->ships()->attach(3, ['result' => 'Sunk']);    // USS Yorktown
        $midway->ships()->attach(5, ['result' => 'Sunk']);    // Akagi
        
        // Battle of Leyte Gulf (id: 3)
        $leyte = Battle::find(3);
        $leyte->ships()->attach(1, ['result' => 'Victory']);  // USS Iowa
        $leyte->ships()->attach(2, ['result' => 'Victory']);  // USS Enterprise
        
        // Pearl Harbor (id: 4)
        $pearl = Battle::find(4);
        $pearl->ships()->attach(5, ['result' => 'Victory']);  // Akagi (Japanese victory)
    }
}