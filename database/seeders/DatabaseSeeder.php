<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {

        $continents = [
            ['name' => 'Europe',],
            ['name' => 'Asia',],
            ['name' => 'Africa',],
            ['name' => 'South America',],
            ['name' => 'North America',],
        ];
        foreach ($continents as $continent) {
            Continent::factory()->create($continent)
                ->each(function ($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });;
        }

    }
}
