<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'name' => $this->faker->name,
            'gender' => $gender,
            'passport_id' => rand(1,20),
            'age' => rand(18,60),
        ];
    }
}
