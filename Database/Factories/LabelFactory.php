<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Str;

>>>>>>> 378fec2 (up)
=======
>>>>>>> 9e2a502 (Lint)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function definition() {
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function definition()
    {
>>>>>>> 71f0636 (up)
=======
    public function definition() {
>>>>>>> e0d1f4b (Lint)
=======
    public function definition()
    {
>>>>>>> de5af69 (up)
=======
    public function definition() {
>>>>>>> c24d571 (Lint)
        return [
=======


        return [
            
>>>>>>> 378fec2 (up)
=======
        return [
>>>>>>> 9e2a502 (Lint)
        ];
    }
}
