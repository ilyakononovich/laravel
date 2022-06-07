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
        Category::factory(10)->create();
        Type::factory(10)->create();
        Country::factory(10)->create();
        City::factory(10)->create();
        Poi::factory(10)->create();


        // \App\Models\User::factory(10)->create();
    }
}
