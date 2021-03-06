<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//---- models ----
use Modules\Blog\Models\Post as Model;

/**
 * Class PostFactory.
 */
class PostFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //PHP Fatal error:  Type of Modules\Blog\Database\Factories\PostFactory::$model must not be defined (as in class Illuminate\Database\Eloquent\Factories\Factory) in
    // /mnt/c/var/www/base_multi/laravel/Modules/Blog/Database/Factories/PostFactory.php on line 36
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'title' => $this->faker->sentence,
            'guid' => $this->faker->slug,
            'subtitle' => $this->faker->sentence,
            'txt' => $this->faker->paragraph,
            'lang' => app()->getLocale(),
            //'user_id' => factory('App\User')->create()->id,
        ];
    }
}