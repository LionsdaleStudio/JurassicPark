<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dinosaurs = [
            'Tyrannosaurus Rex',
            'Velociraptor',
            'Triceratops',
            'Brachiosaurus',
            'Stegosaurus',
            'Ankylosaurus',
            'Parasaurolophus',
            'Spinosaurus',
            'Pteranodon',
            'Mosasaurus',
            'Carnotaurus',
            'Compsognathus',
            'Dilophosaurus',
            'Allosaurus',
            'Indominus Rex',  // Fictional hybrid
            'Indoraptor'      // Fictional hybrid
        ];

        foreach ($dinosaurs as $dino) {
            Type::create(['name' => $dino]);
        }
    }
}
