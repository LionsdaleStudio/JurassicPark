<?php

namespace Database\Seeders;

use App\Models\Dinosaur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinosaurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dinosaur::factory(23)->create();
    }
}
