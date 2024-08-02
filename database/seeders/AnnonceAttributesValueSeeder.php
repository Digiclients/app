<?php

namespace Database\Seeders;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Database\Seeder;
use App\Models\AttributesOption;
use App\Models\AnnonceAttributesValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnonceAttributesValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        // Fetch the parent category with the slug 'voitures'
        $parentCategory = Category::where('slug', 'voitures')->first();

        if (!$parentCategory) {
            return;
        }

        // Fetch the child category under 'voitures' which has main_category = true
        $mainChildCategory = $parentCategory->childCategories()
            ->where('main_category', true)
            ->first();

        if (!$mainChildCategory) {
            return;
        }

        // Fetch the first child category under the main child category which has main_category = false
        $category = $mainChildCategory->childCategories()
            ->where('main_category', false)
            ->first();

        if (!$category) {
            return;
        }

        $categoryId = $category->id;

        // Fetch the first two Annonce records for the specified category_id
        $annonces = Annonce::where('category_id', $categoryId)->take(2)->get();
        $attributes = Attribute::where('category_id', $parentCategory->id)->get();
        $attributeOptions = AttributesOption::whereIn('attribute_id', $attributes->pluck('id'))->get();

        if ($annonces->isEmpty() || $attributes->isEmpty()) {
            return;
        }

        $annonceAttributesValues = [];

        foreach ($annonces as $annonce) {
            foreach ($attributes as $attribute) {
                // Find the first option for the current attribute, if it exists
                $option = $attributeOptions->where('attribute_id', $attribute->id)->first();
                $annonceAttributesValues[] = [
                    'annonce_id' => $annonce->id,
                    'attribute_id' => $attribute->id,
                    'attributeOption_id' => $option ? $option->id : null,
                    'attributeValue' => $option ? $option->optionValue : $attribute->slug . ' ' . $annonce->id,
                ];
            }
        }

        foreach ($annonceAttributesValues as $value) {
            AnnonceAttributesValue::create($value);
        }
    }

}
