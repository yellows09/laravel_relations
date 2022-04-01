<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'video_title' => $this->faker->sentence(2),
            'video_duration' => mt_rand(01,60).':'.mt_rand(01,60)
        ];
    }
}
