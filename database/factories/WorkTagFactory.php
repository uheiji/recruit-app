<?php

namespace Database\Factories;
use App\Models\WorkTag;
use App\Models\Tag;
use App\Models\Work;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkTag>
 */
class WorkTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'work_id' => Work::factory(),
            'tag_id' => Tag::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
