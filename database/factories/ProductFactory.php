<?php

namespace Database\Factories;

use App\Models\Catalog\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => fake()->regexify('[A-Z]{5}'),
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'active' => fake()->boolean(),
            'category_id' => Category::factory()
        ];
    }
}
