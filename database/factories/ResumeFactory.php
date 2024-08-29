<?php

namespace Database\Factories;
use App\Models\Resume;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resume>
 */
class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Userファクトリーから生成
            'skills' => $this->faker->text,
            'work_experience' => $this->faker->text,
            'education' => $this->faker->text,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

