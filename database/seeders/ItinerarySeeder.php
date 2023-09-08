<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Itinerary;

class ItinerarySeeder extends Seeder
{
    public function run()
    {
        Itinerary::factory()->count(10)->create(); 
    }
}

