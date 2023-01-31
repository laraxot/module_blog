<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
declare(strict_types=1);

=======
>>>>>>> 6c99a65 (.)
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 5c25f35 (Lint)
=======
>>>>>>> f98d93c (rebase)
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\Post;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
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
<<<<<<< HEAD
=======
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
>>>>>>> 5c25f35 (Lint)
=======
>>>>>>> f98d93c (rebase)
        return [
            'title' => $this->faker->word,
        ];
    }
}
