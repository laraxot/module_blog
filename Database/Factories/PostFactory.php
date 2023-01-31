<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 6c99a65 (.)
=======
declare(strict_types=1);

>>>>>>> 5c25f35 (Lint)
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\Post;

<<<<<<< HEAD
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
=======
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
>>>>>>> 5c25f35 (Lint)
        return [
            'title' => $this->faker->word,
        ];
    }
}
