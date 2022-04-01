<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'video_id' => mt_rand(21,30),
            'user_id' => mt_rand(121,150)
        ];
    }
}
