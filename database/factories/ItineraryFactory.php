<?php

namespace Database\Factories;

use App\Models\Itinerary;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItineraryFactory extends Factory
{
    protected $model = Itinerary::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'date' => $this->faker->date,
            'constraint' => $this->faker->sentences(2, true),
            'description' => $this->faker->paragraph,
            'activity' => $this->faker->numberBetween(0, 100),

        ];
    }
}

