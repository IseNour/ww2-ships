<?php

namespace Database\Seeders;

use App\Models\ShipClass;
use App\Models\Country;
use App\Models\ShipType;
use Illuminate\Database\Seeder;

class CreateJapaneseClassesSeeder extends Seeder
{
    public function run(): void
    {
        $japan = Country::where('name', 'Japan')->first();

        if (!$japan) {
            $this->command->error('❌ Japan country not found! Please create it first.');
            return;
        }

        // Get ship type IDs
        $battleship = ShipType::where('name', 'Battleship')->first();
        $aircraftCarrier = ShipType::where('name', 'Aircraft Carrier')->first();
        $heavyCruiser = ShipType::where('name', 'Heavy Cruiser')->first();
        $lightCruiser = ShipType::where('name', 'Light Cruiser')->first();
        $destroyer = ShipType::where('name', 'Destroyer')->first();
        $battlecruiser = ShipType::where('name', 'Battlecruiser')->first();

        $classes = [
            // ============================================
            // EXISTING CLASSES (Check and create if missing)
            // ============================================
            [
                'name' => 'Ise',
                'country_id' => $japan->id,
                'type_id' => $battleship->id,
                'id' => 46,
            ],
            [
                'name' => 'Fusō',
                'country_id' => $japan->id,
                'type_id' => $battleship->id,
                'id' => 47,
            ],
            [
                'name' => 'Aoba',
                'country_id' => $japan->id,
                'type_id' => $heavyCruiser->id,
                'id' => 48,
            ],
            [
                'name' => 'Myōkō',
                'country_id' => $japan->id,
                'type_id' => $heavyCruiser->id,
                'id' => 38,
            ],
            [
                'name' => 'Nagara',
                'country_id' => $japan->id,
                'type_id' => $lightCruiser->id,
                'id' => 41,
            ],
            [
                'name' => 'Sendai',
                'country_id' => $japan->id,
                'type_id' => $lightCruiser->id,
                'id' => 49,
            ],
            [
                'name' => 'Ibuki',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 50,
            ],
            [
                'name' => 'Kagerō',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 8,
            ],
            [
                'name' => 'Yūgumo',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 40,
            ],
            [
                'name' => 'Shimakaze',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 24,
            ],
            [
                'name' => 'Akizuki',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 33,
            ],
            [
                'name' => 'Mutsuki',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 51,
            ],
            // ============================================
            // ADDITIONAL CLASSES THAT MIGHT BE MISSING
            // ============================================
            [
                'name' => 'Kongō',
                'country_id' => $japan->id,
                'type_id' => $battlecruiser->id,
                'id' => 32,
            ],
            [
                'name' => 'Shōkaku',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 4,
            ],
            [
                'name' => 'Takao',
                'country_id' => $japan->id,
                'type_id' => $heavyCruiser->id,
                'id' => 9,
            ],
            [
                'name' => 'Akagi',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 18,
            ],
            [
                'name' => 'Shiratsuyu',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 22,
            ],
            [
                'name' => 'Sōryū',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 23,
            ],
            [
                'name' => 'Yūbari',
                'country_id' => $japan->id,
                'type_id' => $lightCruiser->id,
                'id' => 25,
            ],
            [
                'name' => 'Kaga',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 26,
            ],
            [
                'name' => 'Hiyō',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 27,
            ],
            [
                'name' => 'Furutaka',
                'country_id' => $japan->id,
                'type_id' => $heavyCruiser->id,
                'id' => 28,
            ],
            [
                'name' => 'Hōshō',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 29,
            ],
            [
                'name' => 'Zuihō',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 30,
            ],
            [
                'name' => 'Taihō',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 31,
            ],
            [
                'name' => 'Unryū',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 34,
            ],
            [
                'name' => 'Kamikaze',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 35,
            ],
            [
                'name' => 'Chitose',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 36,
            ],
            [
                'name' => 'Fubuki',
                'country_id' => $japan->id,
                'type_id' => $destroyer->id,
                'id' => 37,
            ],
            [
                'name' => 'Mogami',
                'country_id' => $japan->id,
                'type_id' => $heavyCruiser->id,
                'id' => 39,
            ],
            [
                'name' => 'Ryūjō',
                'country_id' => $japan->id,
                'type_id' => $aircraftCarrier->id,
                'id' => 42,
            ],
            [
                'name' => 'Nagato',
                'country_id' => $japan->id,
                'type_id' => $battleship->id,
                'id' => 43,
            ],
            [
                'name' => 'Yamato',
                'country_id' => $japan->id,
                'type_id' => $battleship->id,
                'id' => 3,
            ],
        ];

        $created = 0;
        $skipped = 0;

        foreach ($classes as $classData) {
            $classId = $classData['id'];
            unset($classData['id']);

            $existing = ShipClass::where('name', $classData['name'])->first();

            if (!$existing) {
                // Check if class ID already exists
                $idExists = ShipClass::where('id', $classId)->first();
                if ($idExists) {
                    // Create with new ID if the specified ID is taken
                    $class = ShipClass::create($classData);
                    $this->command->info("✅ Created class: {$classData['name']} (ID: {$class->id})");
                } else {
                    // Create with specific ID
                    $classData['id'] = $classId;
                    $class = ShipClass::create($classData);
                    $this->command->info("✅ Created class: {$classData['name']} (ID: {$classId})");
                }
                $created++;
            } else {
                $this->command->info("⏭️ Skipped: {$classData['name']} (already exists)");
                $skipped++;
            }
        }

        $this->command->info("\n🎉 Class creation complete!");
        $this->command->info("   ✅ Created: {$created}");
        $this->command->info("   ⏭️ Skipped: {$skipped}");
        $this->command->info("   📊 Total classes checked: " . count($classes));
    }
}