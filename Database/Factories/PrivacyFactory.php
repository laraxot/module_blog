<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Privacy;

class PrivacyFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Privacy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            //'id' => $this->faker->randomNumber,
            'related_type' => $this->faker->word,
            'obligatory' => $this->faker->boolean,
        ];
    }
}