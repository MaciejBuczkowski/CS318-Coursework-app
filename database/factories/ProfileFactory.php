<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Profile::class;

    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'date_of_birth' => $this->faker->date('1990-01-01', '2020-12-31'),
        ];
    }
}
