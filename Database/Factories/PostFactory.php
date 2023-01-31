<?php

declare(strict_types=1);

namespace Module\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Blog\Tests\TestSupport\Models\Post;

class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition() {
        return [
            'title' => $this->faker->word,
        ];
    }
}