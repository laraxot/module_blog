<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Modules\Blog\Models\Image;

class ImageFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Modules\Blog\Models\Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
       

        return [
            'id' => $this->faker->randomNumber,
            'post_type' => $this->faker->word,
            'post_id' => $this->faker->integer,
            'src' => $this->faker->text,
            'src_out' => $this->faker->text,
            'width' => $this->faker->randomNumber,
            'height' => $this->faker->randomNumber,
            'user_id' => $this->faker->integer,
            'note' => $this->faker->text
        ];
    }
}
