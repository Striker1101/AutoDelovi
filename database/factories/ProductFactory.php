<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'image' => $this->faker->imageUrl(400, 300),
            'category_id' => rand(1, 10), // Assuming you have categories seeded already
            'brand_id' => rand(1, 10), // Assuming you have brands seeded already
            'vehicle_type' => $this->faker->randomElement(['Motor', 'Auto', 'Terenac', 'Kamion', 'Autobus']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
