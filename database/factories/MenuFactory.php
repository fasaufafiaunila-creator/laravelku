<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'price_amount' => $this->faker->numberBetween(10000, 50000),
            'is_available' => true,
        ];
    }
}
