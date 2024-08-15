<?php

namespace Database\Seeders\parameter;

use App\Models\City;
use App\Models\LeboncoinData;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $cities = LeboncoinData::select('city')
    //         ->whereNotNull('city')
    //         ->distinct()
    //         ->pluck('city');
    //     // $cities = [
    //     //     ['city' => 'Paris', 'description' => 'The capital city of France, known for its art, fashion, and culture.'],
    //     //     ['city' => 'Marseille', 'description' => 'A port city in southern France, known for its historic Old Port and Mediterranean coast.'],
    //     //     ['city' => 'Lyon', 'description' => 'A city in east-central France, known for its cuisine and historical landmarks.'],
    //     //     ['city' => 'Toulouse', 'description' => 'A city in southwestern France, known for its aerospace industry and the Garonne River.'],
    //     //     ['city' => 'Nice', 'description' => 'A city on the French Riviera, known for its beaches and promenade.'],
    //     //     ['city' => 'Nantes', 'description' => 'A city in western France, known for its maritime history and vibrant cultural scene.'],
    //     //     ['city' => 'Strasbourg', 'description' => 'A city in northeastern France, known for its medieval architecture and the European Parliament.'],
    //     //     ['city' => 'Montpellier', 'description' => 'A city in southern France, known for its medieval streets and vibrant student population.'],
    //     //     ['city' => 'Bordeaux', 'description' => 'A city in southwestern France, known for its wine industry and historic architecture.'],
    //     //     ['city' => 'Lille', 'description' => 'A city in northern France, known for its museums and vibrant cultural scene.'],
    //     //     ['city' => 'Autre', 'description' => 'autre']
    //     // ];

    //     foreach ($cities as $city) {
    //         City::create($city);
    //     }
    // }

    public function run(): void
    {
        // Fetch distinct cities from the LeboncoinData table
        $cities = LeboncoinData::select('city')
            ->whereNotNull('city')
            ->distinct()
            ->pluck('city');

        // Loop through each city and create a new City record
        foreach ($cities as $city) {
            City::updateOrCreate(
                ['city' => $city], // Unique key to check if the city already exists
                ['city' => $city, 'description' => $city . ' description']  // Attributes to create or update
            );
        }
    }
}
