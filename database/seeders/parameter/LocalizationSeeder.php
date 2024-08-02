<?php

namespace Database\Seeders\parameter;

use App\Models\City;
use App\Models\Localization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocalizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all cities with their zip codes
        $cities = City::with('zipCode')->get();

        foreach ($cities as $city) {
            foreach ($city->zipCode as $zipCode) {
                Localization::create([
                    'city_id' => $city->id,
                    'zip_code_id' => $zipCode->id,
                    'localization' => $city->city . '-' . $zipCode->zip_code,
                ]);
            }
        }
    }
}
