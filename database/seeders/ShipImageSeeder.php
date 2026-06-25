<?php

namespace Database\Seeders;

use App\Models\ShipImage;
use Illuminate\Database\Seeder;

class ShipImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            ['ship_id' => 1, 'image_url' => '/images/uss-iowa.jpg', 'caption' => 'USS Iowa in the Pacific, 1944'],
            ['ship_id' => 1, 'image_url' => '/images/uss-iowa-2.jpg', 'caption' => 'USS Iowa firing its main guns'],
            ['ship_id' => 2, 'image_url' => '/images/uss-enterprise.jpg', 'caption' => 'USS Enterprise at sea'],
            ['ship_id' => 2, 'image_url' => '/images/uss-enterprise-2.jpg', 'caption' => 'USS Enterprise flight deck operations'],
            ['ship_id' => 4, 'image_url' => '/images/yamato.jpg', 'caption' => 'The battleship Yamato'],
            ['ship_id' => 5, 'image_url' => '/images/akagi.jpg', 'caption' => 'Japanese aircraft carrier Akagi'],
        ];

        foreach ($images as $image) {
            ShipImage::create($image);
        }
    }
}