<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dinosaur>
 */
class DinosaurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dinoNames = [
            'Dracovenator',
            'Volcaneosaurus',
            'Fangrex',
            'Thundrosaur',
            'Shadowraptor',
            'Blazadon',
            'Venomfang',
            'Stormhorn',
            'Oblivisaur',
            'Dreadclaw',
            'Titanfang',
            'Skullcrusher',
            'Eclipsor',
            'Infernodon',
            'Gloomstalker',
            'Aetherbeast'
        ];

        return [
            'name' => fake()->randomElement( $dinoNames),
            'length' => fake()->randomFloat(2, 2, 30), // Length in meters
            'height' => fake()->randomFloat(2, 1, 15), // Height in meters
            'weight' => fake()->randomFloat(2, 50, 15000), // Weight in kg
            'color' => fake()->safeColorName(), // Random color name
            'diet_id' => fake()->numberBetween(1,5),
            'environment_id' => fake()->numberBetween(1,12),
            'type_id' => fake()->numberBetween(1,16),

        ];
    }
}
