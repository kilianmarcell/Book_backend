<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rentals>
 */
class RentalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_id' => $this->faker->numberBetween(1, 15),
            'start_date' => $this->faker->dateTimeBetween('-30 days', '+0 days'),
            'end_date' => $this->faker->dateTimeBetween('-0 days', '+30 days')
        ];
    }
}
