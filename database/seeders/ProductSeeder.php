<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Smartphone X1',
                'description' => 'Dernier smartphone haute performance',
                'description_longue' => 'Écran 6.5", 128GB de stockage, 8GB RAM, triple caméra',
                'price' => '450000',
                'promotion_price' => '420000',
                'in_stock' => true,
                'origin' => 'imported',
                'quantity' => 50,
                'category_id' => 1,
                'user_id' => 2,
            ],
            [
                'name' => 'Robe élégante',
                'description' => 'Robe pour occasions spéciales',
                'description_longue' => '100% coton, disponible en plusieurs tailles et couleurs',
                'price' => '25000',
                'promotion_price' => null,
                'in_stock' => true,
                'origin' => 'local',
                'quantity' => 30,
                'category_id' => 2,
                'user_id' => 2,
            ],
            [
                'name' => 'Canapé 3 places',
                'description' => 'Canapé moderne en tissu',
                'description_longue' => 'Dimensions: 200x90x80 cm, couleur gris anthracite',
                'price' => '350000',
                'promotion_price' => '320000',
                'in_stock' => true,
                'origin' => 'local',
                'quantity' => 10,
                'category_id' => 3,
                'user_id' => 2,
            ],
            [
                'name' => 'Lait hydratant',
                'description' => 'Pour une peau douce et hydratée',
                'description_longue' => '250ml, convient à tous les types de peau',
                'price' => '8000',
                'promotion_price' => '7500',
                'in_stock' => true,
                'origin' => 'local',
                'quantity' => 100,
                'category_id' => 4,
                'user_id' => 2,
            ],
            [
                'name' => 'Riz basmati',
                'description' => 'Riz de qualité supérieure',
                'description_longue' => 'Sac de 5kg, produit importé',
                'price' => '6000',
                'promotion_price' => null,
                'in_stock' => true,
                'origin' => 'imported',
                'quantity' => 200,
                'category_id' => 5,
                'user_id' => 2,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert(array_merge($product, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
