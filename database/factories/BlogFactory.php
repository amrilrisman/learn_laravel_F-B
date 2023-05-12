<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(rand(3, 6)),
            "category_id" => rand(1, 3),
            "user_id" => rand(1, 5),
            "sorth_desc" => $this->faker->paragraph(1),
            "slug" => $this->faker->unique()->slug(3),
            "description" => $this->faker->paragraph(rand(15, 24)),
            "published-at" => now()

        ];
    }
}
