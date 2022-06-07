<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'country_id' => Country::all()->random()->id,
            'latitude' => $this->faker->randomFloat(),
            'longitude' => $this->faker->randomFloat(),
            'ne_latitude' => $this->faker->randomFloat(),
            'ne_longitude' => $this->faker->randomFloat(),
            'sw_latitude' => $this->faker->randomFloat(),
            'sw_longitude' => $this->faker->randomFloat(),
            'purchase_id' => $this->faker->randomDigit(),
            'zoom' => $this->faker->randomDigit(),
            'radius' => $this->faker->randomFloat(),
            'is_published' => 1,
            'price' => $this->faker->randomFloat()
        ];
    }
}
