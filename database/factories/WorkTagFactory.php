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
            'work_id' => Work::factory(), // Workファクトリーから生成
            'tag_id' => Tag::factory(), // Tagファクトリーから生成
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
