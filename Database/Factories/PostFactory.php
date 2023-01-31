<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6c99a65 (.)
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\Post;

<<<<<<< HEAD
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
=======
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
>>>>>>> 6c99a65 (.)
        return [
            'title' => $this->faker->word,
        ];
    }
}
