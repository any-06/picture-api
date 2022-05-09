<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JokeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->string(255),
            'title' => $this->faker->string(255),
            'text' => $this->faker->text(),
            'user' => $this->faker->string(55),
        ];
    }
}
