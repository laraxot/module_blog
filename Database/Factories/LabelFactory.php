<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 378fec2 (up)
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
<<<<<<< HEAD
        return [
=======


        return [
            
>>>>>>> 378fec2 (up)
        ];
    }
}
