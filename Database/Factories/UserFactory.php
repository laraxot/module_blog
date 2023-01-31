<?php

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
declare(strict_types=1);

=======
>>>>>>> 6c99a65 (.)
>>>>>>> 5967355 (rebase)
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\User;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5967355 (rebase)
class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
=======
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
<<<<<<< HEAD
>>>>>>> f784731 (.)
=======
class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
>>>>>>> 197df28 (Lint)
=======
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
>>>>>>> de5af69 (up)
=======
class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
>>>>>>> c24d571 (Lint)
=======
>>>>>>> 6c99a65 (.)
>>>>>>> 5967355 (rebase)
        return [
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'email' => $this->faker->email,
            'password' => bcrypt($this->faker->sentence),
        ];
    }
}
