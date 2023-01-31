<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Contact;

class ContactFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0088a11 (rebase)
=======
>>>>>>> 962cd73 (rebase)
            // 'id' => $this->faker->randomNumber,
            // 'post_id' => $this->faker->integer,
            // 'post_type' => $this->faker->word,
=======
            //'id' => $this->faker->randomNumber,
           // 'post_id' => $this->faker->integer,
           // 'post_type' => $this->faker->word,
<<<<<<< HEAD
>>>>>>> 883dd21 (up)
=======
            // 'id' => $this->faker->randomNumber,
            // 'post_id' => $this->faker->integer,
            // 'post_type' => $this->faker->word,
>>>>>>> 056bec8 (Lint)
=======
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
=======
            // 'id' => $this->faker->randomNumber,
            // 'post_id' => $this->faker->integer,
            // 'post_type' => $this->faker->word,
>>>>>>> 5a12252 (Lint)
>>>>>>> 962cd73 (rebase)
        ];
    }
}
