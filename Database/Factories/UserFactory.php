<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> f784731 (.)
namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\User;

<<<<<<< HEAD
class UserFactory extends Factory {
    protected $model = User::class;

    public function definition() {
=======
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
>>>>>>> f784731 (.)
        return [
            'name' => $this->faker->name,
            'first_name' => $this->faker->firstName,
            'email' => $this->faker->email,
            'password' => bcrypt($this->faker->sentence),
        ];
    }
}
