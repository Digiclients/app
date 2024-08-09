<?php

namespace Database\Seeders\parameter;

use App\Models\Option;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                'option' => 'pro percentage',
                'value' => '10',
                'type' => 'number'
            ],
            [
                'option' => 'apply pro percentage',
                'value' => 'true',
                'type' => 'boolean'
            ],
            [
                'option' => 'default min price range',
                'value' => '800',
                'type' => 'number'
            ],
            [
                'option' => 'default max price range',
                'value' => '10000000',
                'type' => 'number'
            ],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
