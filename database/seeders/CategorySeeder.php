<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Électronique',
                'description' => 'Appareils électroniques et gadgets',
            ],
            [
                'name' => 'Mode',
                'description' => 'Vêtements et accessoires',
            ],
            [
                'name' => 'Maison',
                'description' => 'Meubles et décoration',
            ],
            [
                'name' => 'Beauté',
                'description' => 'Produits de beauté et soins',
            ],
            [
                'name' => 'Alimentation',
                'description' => 'Produits alimentaires',
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'image' => 'categories/' . Str::slug($category['name']) . '.jpg',
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
