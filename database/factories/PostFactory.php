<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str as SupportStr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>SupportStr::uuid()->toString(),
            'title'=> $this->faker->sentence(3),
            'body'=> $this->faker->paragraph(3, true),
            'author'=> $this->faker->name,
            'published'=> $this->faker->boolean,
        ];
    }
}
