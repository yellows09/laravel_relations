<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PassportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $str = ""
            .mt_rand(1,9)
            .mt_rand(1,9)
            ." "
            .mt_rand(22,88)
            ." "
            .mt_rand(100000,999999);
        return [
            'country' => $this->faker->country,
            'passport_series' => $str
        ];
    }
}
