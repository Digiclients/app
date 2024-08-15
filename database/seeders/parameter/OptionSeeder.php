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
                'option' => 'default min price range',
                'value' => '800',
                'type' => 'number'
            ],
            [
                'option' => 'default max price range',
                'value' => '10000000',
                'type' => 'number'
            ],
            [
                'option' => 'default status annonce',
                'value' => 'active',
                'type' => 'text'
            ],
            [
                'option' => 'max annonce images',
                'value' => 'active',
                'type' => 'number'
            ],
            [
                'option' => 'expired annonce date',
                'value' => '10',
                'type' => 'number'
            ],
            [
                'option' => 'expired leboncoin annonce date',
                'value' => '10',
                'type' => 'number'
            ],
        ];
        // like the max images to upload / when to remove leboncoin announce / when to remove the lautoprix annonce /// select the month type num 2 month

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
