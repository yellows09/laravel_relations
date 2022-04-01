<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_username' => $this->faker->word.'_'.$this->faker->word.mt_rand(0,10)
        ];
    }
}
