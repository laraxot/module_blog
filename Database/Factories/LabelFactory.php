<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 802efe7 (up)
=======
>>>>>>> 6e3c302 (Lint)
use Modules\Blog\Models\Label;

class LabelFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Label::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
<<<<<<< HEAD
=======
            'id' => $this->faker->randomNumber,
            'title' => $this->faker->sentence,
            'label_id' => $this->faker->integer,
<<<<<<< HEAD
            'label_type' => $this->faker->word
>>>>>>> 802efe7 (up)
=======
            'label_type' => $this->faker->word,
>>>>>>> 6e3c302 (Lint)
        ];
    }
}
