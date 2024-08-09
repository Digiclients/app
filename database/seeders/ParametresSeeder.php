<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\parameter\OptionSeeder;
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
            OptionSeeder::class,
        ];
    }
}
