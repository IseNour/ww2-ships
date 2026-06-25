<?php

namespace Database\Seeders;

use App\Models\ShipClass;
use Illuminate\Database\Seeder;

class ShipClassSeeder extends Seeder
{
    public function run(): void
    {
        $classes = [
            ['name' => 'Iowa', 'country_id' => 1, 'type_id' => 1],
            ['name' => 'Yorktown', 'country_id' => 1, 'type_id' => 2],
            ['name' => 'Yamato', 'country_id' => 3, 'type_id' => 1],
            ['name' => 'Shokaku', 'country_id' => 3, 'type_id' => 2],
            ['name' => 'King George V', 'country_id' => 2, 'type_id' => 1],
            ['name' => 'Essex', 'country_id' => 1, 'type_id' => 2],
            ['name' => 'Fletcher', 'country_id' => 1, 'type_id' => 4],
            ['name' => 'Akizuki', 'country_id' => 3, 'type_id' => 4],
        ];

        foreach ($classes as $class) {
            ShipClass::create($class);
        }
    }
}