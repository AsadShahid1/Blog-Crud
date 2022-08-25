<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    {
        return [
            'title' => $this->faker->title,
            'description'=> $this->faker->paragraph,
            'featured_image' => '',
            'category_id' => Category::inRandomOrder()->take(1)->first()->id,
            'user_id' => User::inRandomOrder()->take(1)->first()->id,
        ];
    }
}
