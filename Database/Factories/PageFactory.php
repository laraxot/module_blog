<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Page as Model;

/**
 * Class PageFactory.
 */
class PageFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            //'title' => $faker->sentence,
            //'description' => $faker->paragraph,
            //'user_id' => factory(User::class)->create()->id,
            /*
            'latitude' 			=> $faker->latitude,
            'longitude' 		=> $faker->longitude,
            'route'				=> $faker->streetName,
            'country' 			=> $faker->country,
            'street_number'		=> $faker->buildingNumber,
            'postal_code'		=> $faker->postcode,
            'locality' 			=> $faker->city,
            'formatted_address' => $faker->streetAddress,
            */
        ];
    }
}
