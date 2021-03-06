<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'category' => $this->faker->randomElement($array = array('Tech','Sports','Travel','Music','LifeStyle','Food','Fashion','Fitness')),
            'body' => $this->faker->text($maxNbChars = 200),
        ];
    }
}
