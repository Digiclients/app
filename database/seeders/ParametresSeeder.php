<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\parameter\CitySeeder;
use Database\Seeders\parameter\OptionSeeder;
use Database\Seeders\parameter\ZipCodeSeeder;
use Database\Seeders\parameter\LocalizationSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParametresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(ParametresSeeder::Classes());
    }

    public static function Classes(): array
    {
        return [
            CitySeeder::class,
            ZipCodeSeeder::class,
            LocalizationSeeder::class,
            OptionSeeder::class,
        ];
    }
}
