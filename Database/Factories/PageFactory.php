<?php

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Page as Model;

/**
 * Class PageFactory
 * @package Modules\Blog\Database\Factories
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
            //'auth_user_id' => factory(User::class)->create()->auth_user_id,
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
