<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Environment;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $environments = [
            'Forest',
            'Swamp',
            'Grassland',
            'Desert',
            'Mountain',
            'Coastal',
            'River',
            'Lake',
            'Ocean',
            'Cave',
            'Wetlands',
            'Jungle',
        ];

        foreach ($environments as $environment) {
            Environment::create(['name' => $environment]);
        }
    }
}
