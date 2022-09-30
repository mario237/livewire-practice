<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => fake()->name(25),
            'continent_id' => fake()->numberBetween(1, Continent::count()),
        ];
    }
}
