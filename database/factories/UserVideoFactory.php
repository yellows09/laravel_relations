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
            'video_id' => mt_rand(1,60),
            'user_id' => mt_rand(1,30)
        ];
    }
}
