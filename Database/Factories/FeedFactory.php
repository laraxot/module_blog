<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 968db6d (up)
use Modules\Blog\Models\Feed;

class FeedFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
<<<<<<< HEAD
        return [
            'id' => $this->faker->randomNumber,
=======
       

        return [
            'id' => $this->faker->randomNumber
>>>>>>> 968db6d (up)
        ];
    }
}
