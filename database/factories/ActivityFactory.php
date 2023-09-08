<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'date' => $this->faker->date,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->words(3, true),
        ];
    }
}

