<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Assuming you have users seeded already
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->optional()->streetAddress,
            'zip' => $this->faker->postcode,
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
