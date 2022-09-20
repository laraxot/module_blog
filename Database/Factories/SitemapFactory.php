<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 968db6d (up)
use Modules\Blog\Models\Sitemap;

class SitemapFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sitemap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
<<<<<<< HEAD
=======
       

>>>>>>> 968db6d (up)
        return [
            'id' => $this->faker->randomNumber,
            'created_by' => $this->faker->word,
            'updated_by' => $this->faker->word,
            'created_at' => $this->faker->dateTime,
<<<<<<< HEAD
            'updated_at' => $this->faker->dateTime,
=======
            'updated_at' => $this->faker->dateTime
>>>>>>> 968db6d (up)
        ];
    }
}
