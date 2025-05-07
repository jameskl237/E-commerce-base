<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Admin
         DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'phone' => '771234567',
            'address' => '123 Admin Street, Dakar',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Fournisseur
        DB::table('users')->insert([
            'name' => 'Fournisseur Tech',
            'username' => 'tech_supplier',
            'email' => 'supplier@example.com',
            'role' => 'supplier',
            'phone' => '772345678',
            'address' => '456 Supplier Avenue, Dakar',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Utilisateurs normaux
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . $i,
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'role' => 'user',
                'phone' => '77' . rand(1000000, 9999999),
                'address' => rand(1, 100) . ' User Street, Dakar',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
