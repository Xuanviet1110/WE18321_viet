<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make(Str::random(10)), // Tạo mật khẩu ngẫu nhiên và băm nó
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'remember_token' => Str::random(10),
            'address'=>$this->faker->city(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

}
