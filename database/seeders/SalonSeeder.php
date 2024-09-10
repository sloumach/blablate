<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertion de 5 salons
        DB::table('salons')->insert([
            [
                'name' => 'Général',
                'description' => 'Salon de discussion général pour tous les utilisateurs',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tech Talk',
                'description' => 'Discussions sur les technologies et les innovations',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gaming Zone',
                'description' => 'Discussion sur les jeux vidéo et e-sport',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Projet Collaboratif',
                'description' => 'Espace dédié à la collaboration sur des projets',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Support',
                'description' => 'Espace pour demander de l\'aide ou du support technique',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
