<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diets = [
            ['name' => 'Herbivore'],
            ['name' => 'Carnivore'],
            ['name' => 'Omnivore'],
            ['name' => 'Piscivore'], // Fish-eater
            ['name' => 'Insectivore'], // Insect-eater
        ];

        DB::table('diets')->insert($diets);
    }
}
