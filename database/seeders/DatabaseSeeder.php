<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Poi;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(10)->create();
        $types = Type::factory(10)->create();
        Country::factory(10)->create();
        City::factory(10)->create();
        $pois = Poi::factory(10)->create();

        foreach ($pois as $poi)
        {
            $categoriesIds = $categories->random(2)->pluck('id');
            $typesIds = $types->random(2)->pluck('id');
            $poi->categories()->attach($categoriesIds);
            $poi->types()->attach($typesIds);
        }
        // \App\Models\User::factory(10)->create();
    }
}
