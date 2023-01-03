<?php

namespace Database\Factories;

use App\Models\Bid;
use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bid_price' => $this->faker->randomFloat(2, 0, 1000),
            'user_id' => $this->faker->numberBetween(1, 10),
            'auction_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
