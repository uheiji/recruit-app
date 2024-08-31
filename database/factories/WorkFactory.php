<?php

namespace Database\Factories;
use App\Models\Work;
use App\Models\Company;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(), 
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'requirements' => $this->faker->text,
            'salary' => $this->faker->numberBetween(30000, 120000),
            'location' => $this->faker->city,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
