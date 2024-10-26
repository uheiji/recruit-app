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
            'company_id' => \App\Models\Company::factory(),
            'title' => $this->faker->randomElement(['フロントエンドエンジニア', 'バックエンドエンジニア', 'デザイナー']),
            'description' => 'このポジションでは最新の技術を使った開発に携わることができます。',
            'requirements' => '3年以上の開発経験と、チームでの協力ができることが求められます。',
            'salary' => $this->faker->numberBetween(100000, 999999),
            'location' => $this->faker->randomElement(['東京都', '大阪府', '福岡県', '北海道']),
            'tag' => $this->faker->randomElement(['リモート可', 'フルタイム', 'パートタイム']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
