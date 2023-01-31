<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
=======
>>>>>>> e7b73dd (rebase)
declare(strict_types=1);

=======
>>>>>>> 6c99a65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e7b73dd (rebase)
=======
declare(strict_types=1);

>>>>>>> 5c25f35 (Lint)
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
=======
>>>>>>> e7b73dd (rebase)
=======
declare(strict_types=1);

>>>>>>> 6d76482 (up)
>>>>>>> 31b2874bced50f2cc56f4271d588e071d41fd17a
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\Post;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
=======
>>>>>>> e7b73dd (rebase)
=======
>>>>>>> 6d76482 (up)
>>>>>>> 31b2874bced50f2cc56f4271d588e071d41fd17a
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
>>>>>>> 6c99a65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e7b73dd (rebase)
=======
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
>>>>>>> 5c25f35 (Lint)
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
=======
>>>>>>> e7b73dd (rebase)
=======
>>>>>>> 6d76482 (up)
>>>>>>> 31b2874bced50f2cc56f4271d588e071d41fd17a
        return [
            'title' => $this->faker->word,
        ];
    }
}
