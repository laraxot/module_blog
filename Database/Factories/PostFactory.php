<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> f784731 (.)
=======
declare(strict_types=1);

>>>>>>> 197df28 (Lint)
=======
=======
>>>>>>> fb6cf60 (rebase)
declare(strict_types=1);

=======
>>>>>>> 6c99a65 (.)
<<<<<<< HEAD
>>>>>>> 5967355 (rebase)
=======
=======
declare(strict_types=1);

>>>>>>> 5c25f35 (Lint)
>>>>>>> fb6cf60 (rebase)
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\Post;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5967355 (rebase)
=======
>>>>>>> fb6cf60 (rebase)
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
=======
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
<<<<<<< HEAD
>>>>>>> f784731 (.)
=======
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
>>>>>>> 197df28 (Lint)
=======
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
>>>>>>> de5af69 (up)
=======
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
>>>>>>> c24d571 (Lint)
=======
>>>>>>> 6c99a65 (.)
<<<<<<< HEAD
>>>>>>> 5967355 (rebase)
=======
=======
class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
>>>>>>> 5c25f35 (Lint)
>>>>>>> fb6cf60 (rebase)
        return [
            'title' => $this->faker->word,
        ];
    }
}
