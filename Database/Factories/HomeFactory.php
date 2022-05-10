<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Home;

class HomeFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'id' => $this->faker->word,
            'name' => $this->faker->name,
            'icon_src' => $this->faker->word,
        ];
    }
}
