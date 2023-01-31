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
use Module\Blog\Tests\TestSupport\Models\User;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f98d93c (rebase)
class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
=======
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
>>>>>>> 6c99a65 (.)
<<<<<<< HEAD
=======
class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
>>>>>>> 5c25f35 (Lint)
=======
>>>>>>> f98d93c (rebase)
        return [
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'email' => $this->faker->email,
            'password' => bcrypt($this->faker->sentence),
        ];
    }
}
