<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\LeboncoinData;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {

    //     $vehicules = Category::create([
    //         'category_name' => 'Véhicules',
    //         'slug' => 'vehicules',
    //         'parent_category_id' => null,
    //         'main_category' => true,
    //     ]);

    //     // Create subcategories for vehicules
    //     $voitures = Category::create([
    //         'category_name' => 'Voitures',
    //         'slug' => 'voitures',
    //         'parent_category_id' => $vehicules->id,
    //         'main_category' => true,
    //     ]);

    //     // Create subcategories for voitures
    //     $AUDI = Category::create([
    //         'category_name' => 'AUDI',
    //         'slug' => 'AUDI',
    //         'parent_category_id' => $voitures->id,
    //         'main_category' => true,
    //     ]);

    //     $BMW = Category::create([
    //         'category_name' => 'BMW',
    //         'slug' => 'BMW',
    //         'parent_category_id' => $voitures->id,
    //         'main_category' => true,
    //     ]);

    //     // Create subcategories for audi
    //     Category::create([
    //         'category_name' => 'A1',
    //         'slug' => 'AUDI_A1',
    //         'parent_category_id' => $AUDI->id,
    //         'main_category' => false,
    //     ]);

    //     Category::create([
    //         'category_name' => 'A3',
    //         'slug' => 'AUDI_A3',
    //         'parent_category_id' => $AUDI->id,
    //         'main_category' => false,
    //     ]);

    //     Category::create([
    //         'category_name' => 'Q3',
    //         'slug' => 'AUDI_Q3',
    //         'parent_category_id' => $AUDI->id,
    //         'main_category' => false,
    //     ]);

    //     // Create subcategories for BMW
    //     Category::create([
    //         'category_name' => 'Série_1',
    //         'slug' => 'BMW_Série_1',
    //         'parent_category_id' => $BMW->id,
    //         'main_category' => false,
    //     ]);

    //     Category::create([
    //         'category_name' => 'Série_3',
    //         'slug' => 'BMW_Série_3',
    //         'parent_category_id' => $BMW->id,
    //         'main_category' => false,
    //     ]);

    // }

    public function run(): void
    {
        // Create the main category 'Véhicules'
        $vehicules = Category::create([
            'category_name' => 'Véhicules',
            'slug' => 'vehicules',
            'parent_category_id' => null,
            'main_category' => true,
        ]);

        // Create the subcategory 'Voitures' under 'Véhicules'
        $voitures = Category::create([
            'category_name' => 'Voitures',
            'slug' => 'voitures',
            'parent_category_id' => $vehicules->id,
            'main_category' => true,
        ]);

        // Get all distinct u_car_brand and u_car_model combinations
        // $leboncoinMarquesModels = LeboncoinData::select('u_car_brand', 'u_car_model')->distinct()->get();
        $leboncoinMarquesModels = LeboncoinData::select('u_car_brand', 'u_car_model')->whereNotNull('u_car_brand')->whereNotNull('u_car_model')->distinct()->get();

        // Loop through each brand and create categories
        foreach ($leboncoinMarquesModels as $data) {
            // Create slug for brand
            $brandSlug = strtolower($data->u_car_brand);

            // Check if the brand category exists or create it
            $brandCategory = Category::firstOrCreate(
                [
                    'slug' => $brandSlug,
                    'parent_category_id' => $voitures->id,
                ],
                [
                    'category_name' => $data->u_car_brand,
                    'main_category' => true,
                ],
            );

            // Create slug for model in the format 'u_car_model-u_car_brand'
            $modelSlug = strtolower($data->u_car_model . '-' . $data->u_car_brand);

            // Check if the model category exists or create it
            Category::firstOrCreate(
                [
                    'slug' => $modelSlug,
                    'parent_category_id' => $brandCategory->id,
                ],
                [
                    'category_name' => $data->u_car_model,
                    'main_category' => false,
                ],
            );
        }
    }
}
