<?php

namespace Database\Factories;
use App\Models\Staff;
use App\Models\Company;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
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
            'name' => $this->faker->name,
            'password' => bcrypt('password'),
            'email' => $this->faker->unique()->safeEmail,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
