<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => fake()->numberBetween(1, 100),
            'seller_id' => fake()->numberBetween(1, 100),
            'sold_at' => fake()->dateTimeBetween('-8 years', '-1 year'),
            'status'=> fake()->randomElement(Status::cases()),
            'total_amount' => fake()->numberBetween(10000, 50000)
        ];
    }
}
