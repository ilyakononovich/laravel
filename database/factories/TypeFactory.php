<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
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
            'description' => $this->faker->text,
            'poi_type_color' => $this->faker->hexColor,
            'icon_image' => $this->faker->imageUrl
        ];
    }
}
