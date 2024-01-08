<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = $this->faker->dateTimeBetween('now', '+1 month');
        $endDate = $this->faker->dateTimeBetween($startDate, '+2 months');

        return [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'room_id' => function () {
                return Room::inRandomOrder()->first()->id;
            },
        ];
    }
}
