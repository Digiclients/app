<?php

namespace Database\Seeders;

use App\Models\LeboncoinData;
use App\Models\PriceRangeData;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PriceRangeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     // Fetch distinct model-slug values from LeboncoinData model
    //     $modelSlugs = LeboncoinData::select('model-slug')
    //         ->whereNotNull('model-slug')
    //         ->distinct()
    //         ->pluck('model-slug');

    //     // Loop through each model-slug and create a new PriceRangeData entry
    //     foreach ($modelSlugs as $modelSlug) {
    //         PriceRangeData::create([
    //             'model-slug' => $modelSlug,
    //             'min-price' => 100,
    //             'max-price' => 1000000,
    //         ]);
    //     }
    // }

    public function run(): void
    {
        // Fetch distinct model-slug values from LeboncoinData model
        $modelSlugs = LeboncoinData::select('model-slug')->whereNotNull('model-slug')->distinct()->pluck('model-slug');

        // Loop through each model-slug and create or update a PriceRangeData entry
        foreach ($modelSlugs as $modelSlug) {
            PriceRangeData::updateOrCreate(
                ['model-slug' => $modelSlug], // Search for a record with this model-slug
                [
                    'min-price' => 100, // Set the min-price
                    'max-price' => 1000000, // Set the max-price
                ],
            );
        }
    }
}
