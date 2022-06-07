<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'latitude' => $this->faker->randomFloat(),
            'longitude' => $this->faker->randomFloat(),
            'liked' => 1,
            'viewed' => 1,
            'priority' => $this->faker->text(10),
            'description' => $this->faker->text,
            'city_id' => City::all()->random()->id,
            'detail' => $this->faker->text,
            'detail_info_copyright' => $this->faker->text,
            'address' => $this->faker->address,
            'website' => $this->faker->url,
            'zoom' => 1,
            'radius' => $this->faker->randomFloat()
        ];
    }
}
