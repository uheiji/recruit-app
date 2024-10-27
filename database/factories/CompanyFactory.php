<?php

namespace Database\Factories;
use App\Models\Company;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['株式会社サンプル', '合同会社デモ', '有限会社テスト']),
            'email' => $this->faker->unique()->companyEmail,
            'password' => bcrypt('password'),
            'address' => $this->faker->randomElement(['東京都渋谷区', '大阪市北区', '福岡市中央区', '札幌市北区']),
            'phone' => $this->faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
