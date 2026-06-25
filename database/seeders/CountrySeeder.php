<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
{
    $countries = [
        ['name' => 'United States', 'flag' => 'us.webp'],
        ['name' => 'United Kingdom', 'flag' => 'uk.jpg'],
        ['name' => 'Japan', 'flag' => 'japan.webp'],
        ['name' => 'Germany', 'flag' => 'germany.avif'],
        ['name' => 'Italy', 'flag' => 'italy.png'],
        ['name' => 'France', 'flag' => 'france.png'],
        ['name' => 'Soviet Union', 'flag' => 'ussr.png'],
    ];

    foreach ($countries as $country) {
        Country::updateOrCreate(
            ['name' => $country['name']],
            ['flag' => $country['flag']]
        );
    }
}
}