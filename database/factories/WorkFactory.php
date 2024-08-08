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

    protected $model = Work::class;

    public function definition(): array
    {
        return [
            'company_id' => Company::factory(), // 外部キーとしてCompanyのファクトリを使用
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'requirements' => $this->faker->paragraph,
            'salary' => $this->faker->randomFloat(2, 30000, 100000),
            'location' => $this->faker->city,
            'tag' => $this->faker->word,
        ];
    }
}
