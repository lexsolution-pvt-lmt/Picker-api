<?php

namespace Database\Factories;

use App\Models\Auction;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuctionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'starting_price' => $this->faker->randomFloat(2, 0, 1000),
            'reserve_price' => $this->faker->randomFloat(2, 0, 1000),
            'buy_now_price' => $this->faker->randomFloat(2, 0, 1000),
            'end_date' => $this->faker->date,
            'end_time' => $this->faker->time,
            'status' => $this->faker->randomElement(['Sold', 'Unsold']),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
