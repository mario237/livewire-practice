<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl(),
            'title' => fake()->text(50),
            'description' => fake()->text(2000),
            'price' => fake()->randomFloat(2, 5, 1000)
        ];
    }
}
