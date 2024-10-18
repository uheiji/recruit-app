<?php

namespace Database\Factories;
use App\Models\Favorite;
use App\Models\Work;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'work_id' => Work::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
