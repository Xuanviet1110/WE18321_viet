<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orders>
 */
class ordersFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Tạo user ngẫu nhiên
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'totalPrice' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
