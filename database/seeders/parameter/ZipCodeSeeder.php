<?php

namespace Database\Seeders\parameter;

use App\Models\City;
use App\Models\ZipCode;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zipCodes = [
            ['city' => 'Paris', 'zip_code' => '75001', 'description' => 'Central Paris'],
            ['city' => 'Marseille', 'zip_code' => '13001', 'description' => 'Central Marseille'],
            ['city' => 'Lyon', 'zip_code' => '69001', 'description' => 'Central Lyon'],
            ['city' => 'Toulouse', 'zip_code' => '31000', 'description' => 'Central Toulouse'],
            ['city' => 'Nice', 'zip_code' => '06000', 'description' => 'Central Nice'],
            ['city' => 'Nantes', 'zip_code' => '44000', 'description' => 'Central Nantes'],
            ['city' => 'Strasbourg', 'zip_code' => '67000', 'description' => 'Central Strasbourg'],
            ['city' => 'Montpellier', 'zip_code' => '34000', 'description' => 'Central Montpellier'],
            ['city' => 'Bordeaux', 'zip_code' => '33000', 'description' => 'Central Bordeaux'],
            ['city' => 'Lille', 'zip_code' => '59000', 'description' => 'Central Lille'],
            ['city' => 'Autre', 'zip_code' => '0', 'description' => 'Autre'],
        ];

        foreach ($zipCodes as $zipCode) {
            $city = City::where('city', $zipCode['city'])->first();
            if ($city) {
                ZipCode::create([
                    'city_id' => $city->id,
                    'zip_code' => $zipCode['zip_code'],
                    'description' => $zipCode['description']
                ]);
            }
        }
    }
}
