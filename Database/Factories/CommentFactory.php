<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = \Modules\Blog\Entities\Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
        ];
    }
}
