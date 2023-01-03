<?php

namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feedback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feedbacks' => $this->faker->paragraph,
            'auction_id' => $this->faker->numberBetween(1, 10),
            'feedback_type_id' => $this->faker->numberBetween(1, 2),
            'left_by_user_id' => $this->faker->numberBetween(1, 10),
            
            
            
        ];
    }
}
