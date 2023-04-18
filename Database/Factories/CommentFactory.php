<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Comment;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->dateTime,
            'created_by' => $this->faker->word,
            'deleted_by' => $this->faker->word,
            // 'id' => $this->faker->randomNumber,
            'lang' => $this->faker->word,
            // 'post_id' => $this->faker->integer,
            'post_type' => $this->faker->word,
            // 'status' => $this->faker->randomNumber,
            'txt' => $this->faker->text,
            'updated_at' => $this->faker->dateTime,
            // 'updated_by' => $this->faker->word,
            // 'user_id' => $this->faker->integer,
        ];
    }
}
