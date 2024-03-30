<?php

namespace Database\Factories;

use App\Models\SoldProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoldProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 10), // Assuming you have products seeded already
            'purchase_id' => $this->faker->numberBetween(1, 10), // Assuming you have purchases seeded already
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'total_amount' => $this->faker->randomFloat(2, 100, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
