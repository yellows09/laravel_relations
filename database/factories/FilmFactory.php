<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'year' => $this->faker->dateTimeBetween('-100 year', 'now'),
            'budget' => $this->faker->numberBetween([10000,999999999]),
            'director_id' => rand(1,20)
        ];
    }
}
