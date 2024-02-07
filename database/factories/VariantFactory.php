<?php

namespace Database\Factories;

use App\Models\Catalog\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => fake()->regexify('[A-Z]{5}-[A-Z]{2}[0-9]{3}'),
            'description' => fake()->paragraph(),
            'price' => fake()->randomNumber(4, true),
            'stock' => fake()->numberBetween(100, 1000),
            'active' => fake()->boolean(),
            'product_id' => Product::factory()
        ];
    }
}
