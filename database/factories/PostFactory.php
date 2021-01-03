<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *

     *
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
           'slug' => Str::slug($this->faker->sentence),
           'user_id' => 1,
           'active' => $this->faker->numberBetween(0,1)
        ];
    }
}
