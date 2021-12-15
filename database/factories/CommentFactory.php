<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id' => $this->faker->numberBetween(1,25),
            'profile_id' => $this->faker->numberBetween(1,5), 
            'content' => $this->faker->sentence(),

        ];
    }
}
