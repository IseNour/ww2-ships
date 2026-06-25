<?php

namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Seeder;

class ShipSeeder extends Seeder
{
    public function run(): void
    {
        // US Battleships
        Ship::create([
            'name' => 'USS Iowa (BB-61)',
            'class_id' => 1,
            'launch_date' => '1942-08-27',
            'commission_date' => '1943-02-22',
            'displacement' => 45000,
            'length' => 270.4,
            'beam' => 33.0,
            'draft' => 8.8,
            'max_speed' => 33,
            'crew' => 2700,
            'fate' => 'Museum ship',
            'description' => 'Lead ship of the Iowa-class battleships',
            'is_aircraft_carrier' => false,
        ]);

        // US Aircraft Carriers
        Ship::create([
            'name' => 'USS Enterprise (CV-6)',
            'class_id' => 2,
            'launch_date' => '1936-10-03',
            'commission_date' => '1938-05-12',
            'displacement' => 25500,
            'length' => 246.7,
            'beam' => 33.4,
            'draft' => 8.5,
            'max_speed' => 32.5,
            'crew' => 2217,
            'fate' => 'Scrapped in 1958',
            'description' => 'The most decorated US ship of World War II',
            'is_aircraft_carrier' => true,
        ]);

        Ship::create([
            'name' => 'USS Yorktown (CV-5)',
            'class_id' => 2,
            'launch_date' => '1936-04-04',
            'commission_date' => '1937-09-30',
            'displacement' => 25500,
            'length' => 246.7,
            'beam' => 33.4,
            'draft' => 8.5,
            'max_speed' => 32.5,
            'crew' => 2217,
            'fate' => 'Sunk at Battle of Midway, 1942',
            'description' => 'Yorktown-class aircraft carrier',
            'is_aircraft_carrier' => true,
        ]);

        // Japanese Battleships
        Ship::create([
            'name' => 'Yamato',
            'class_id' => 3,
            'launch_date' => '1940-08-08',
            'commission_date' => '1941-12-16',
            'displacement' => 65000,
            'length' => 263.0,
            'beam' => 38.9,
            'draft' => 10.4,
            'max_speed' => 27,
            'crew' => 2500,
            'fate' => 'Sunk in 1945',
            'description' => 'The largest battleship ever built',
            'is_aircraft_carrier' => false,
        ]);

        // Japanese Aircraft Carriers
        Ship::create([
            'name' => 'Akagi',
            'class_id' => 4,
            'launch_date' => '1925-04-22',
            'commission_date' => '1927-03-25',
            'displacement' => 36500,
            'length' => 260.7,
            'beam' => 31.3,
            'draft' => 8.7,
            'max_speed' => 31.2,
            'crew' => 1600,
            'fate' => 'Scuttled after Battle of Midway, 1942',
            'description' => 'One of the Imperial Japanese Navy\'s largest carriers',
            'is_aircraft_carrier' => true,
        ]);

        // US Destroyers
        Ship::create([
            'name' => 'USS Fletcher (DD-445)',
            'class_id' => 7,
            'launch_date' => '1942-05-03',
            'commission_date' => '1942-06-30',
            'displacement' => 2500,
            'length' => 114.8,
            'beam' => 12.0,
            'draft' => 5.5,
            'max_speed' => 38,
            'crew' => 329,
            'fate' => 'Museum ship',
            'description' => 'Lead ship of the Fletcher-class destroyers',
            'is_aircraft_carrier' => false,
        ]);

        // British Ships
        Ship::create([
            'name' => 'HMS King George V',
            'class_id' => 5,
            'launch_date' => '1939-02-21',
            'commission_date' => '1940-12-11',
            'displacement' => 42000,
            'length' => 227.1,
            'beam' => 34.3,
            'draft' => 9.9,
            'max_speed' => 28.3,
            'crew' => 1500,
            'fate' => 'Scrapped in 1957',
            'description' => 'Lead ship of the King George V-class battleships',
            'is_aircraft_carrier' => false,
        ]);
    }
}