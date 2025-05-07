<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medias = [
            [
                'url' => 'products/smartphone-x1.jpg',
                'type' => 'image',
                'is_principal' => true,
                'product_id' => 1,
            ],
            [
                'url' => 'products/robe-elegante.jpg',
                'type' => 'image',
                'is_principal' => true,
                'product_id' => 2,
            ],
            [
                'url' => 'products/canape-3-places.jpg',
                'type' => 'image',
                'is_principal' => true,
                'product_id' => 3,
            ],
            [
                'url' => 'products/lait-hydratant.jpg',
                'type' => 'image',
                'is_principal' => true,
                'product_id' => 4,
            ],
            [
                'url' => 'products/riz-basmati.jpg',
                'type' => 'image',
                'is_principal' => true,
                'product_id' => 5,
            ],
            // Images supplémentaires
            [
                'url' => 'products/smartphone-x1-2.jpg',
                'type' => 'image',
                'is_principal' => false,
                'product_id' => 1,
            ],
            [
                'url' => 'products/smartphone-x1-video.mp4',
                'type' => 'video',
                'is_principal' => false,
                'product_id' => 1,
            ],
        ];

        foreach ($medias as $media) {
            DB::table('medias')->insert(array_merge($media, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
