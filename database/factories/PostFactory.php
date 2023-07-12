<?php

namespace Database\Factories;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'author_img' => $this->faker->imageUrl(),
            'date' => $this->faker->date,
            'img' => $this->faker->imageUrl(),
        ];
    }
}