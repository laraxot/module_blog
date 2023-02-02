<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Event as Model;

/**
 * Class ArticleFactory.
 */
class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $add_day = random_int(-20, 20);
        $add_minutes = random_int(1, 3) * 30;
        $date_start = now()->addDays($add_day);

        // $date_start = Carbon::now()->addDays(random_int(-10, 10));
        $date_end = now()->addDays($add_day)->addMinutes($add_minutes);

        $data = [
            // 'title' => $this->faker->sentence,
            // 'description' => $this->faker->paragraph,
            // 'user_id' => factory(User::class)->create()->id,
            /*
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'route' => $this->faker->streetName(),
            'country' => $this->faker->country(),
            'street_number' => $this->faker->buildingNumber(),
            'postal_code' => $this->faker->postcode(),
            'locality' => $this->faker->city(),
            'formatted_address' => $this->faker->streetAddress(),
            */
            'date_start' => $date_start,
            'date_end' => $date_end,
        ];

        return $data;
    }
}
