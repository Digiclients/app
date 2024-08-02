<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicules = Category::create([
            'category_name' => 'Véhicules',
            'slug' => 'vehicules',
            'parent_category_id' => null,
            'main_category' => true,
        ]);

        // Create subcategories for vehicules
        $voitures = Category::create([
            'category_name' => 'Voitures',
            'slug' => 'voitures',
            'parent_category_id' => $vehicules->id,
            'main_category' => true,
        ]);

        // Create subcategories for voitures
        $AUDI = Category::create([
            'category_name' => 'AUDI',
            'slug' => 'AUDI',
            'parent_category_id' => $voitures->id,
            'main_category' => true,
        ]);

        $BMW = Category::create([
            'category_name' => 'BMW',
            'slug' => 'BMW',
            'parent_category_id' => $voitures->id,
            'main_category' => true,
        ]);

        // Create subcategories for audi
        Category::create([
            'category_name' => 'A1',
            'slug' => 'AUDI_A1',
            'parent_category_id' => $AUDI->id,
            'main_category' => false,
        ]);

        Category::create([
            'category_name' => 'A3',
            'slug' => 'AUDI_A3',
            'parent_category_id' => $AUDI->id,
            'main_category' => false,
        ]);

        Category::create([
            'category_name' => 'Q3',
            'slug' => 'AUDI_Q3',
            'parent_category_id' => $AUDI->id,
            'main_category' => false,
        ]);


        // Create subcategories for BMW
        Category::create([
            'category_name' => 'Série_1',
            'slug' => 'BMW_Série_1',
            'parent_category_id' => $BMW->id,
            'main_category' => false,
        ]);

        Category::create([
            'category_name' => 'Série_3',
            'slug' => 'BMW_Série_3',
            'parent_category_id' => $BMW->id,
            'main_category' => false,
        ]);



    }
}
