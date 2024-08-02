<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Boutique;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Localization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch a professional user
        $professionalUser = User::where('sellerType', User::PROFESSIONNEL)->first();

        // Fetch a private user
        $privateUser = User::where('sellerType', User::PARTICULIER)->first();

        // Fetch a boutique associated with the professional user
        $boutique = Boutique::where('user_id', $professionalUser->id)->first();

        // Fetch a subcategory (where main_category is false)
        $category = Category::where('main_category', false)->first();

        // Fetch a localization
        $localization = Localization::inRandomOrder()->first();

        // Create an annonce for the professional user
        Annonce::create([
            'user_id' => $professionalUser->id,
            'boutique_id' => $boutique->id,
            'category_id' => $category->id,
            'localization_id' => $localization->id,
            'title' => 'Annonce ' . Str::random(5) . ' Professionnel',
            'description' => 'This is a description for a professional user annonce.',
            'price' => rand(1000, 5000),
            'email' => $professionalUser->email,
            'phone' => $professionalUser->phone,
            'publication_date' => now(),
            'status' => 'pending',
        ]);

        // Create an annonce for the private user
        Annonce::create([
            'user_id' => $privateUser->id,
            'boutique_id' => null,
            'category_id' => $category->id,
            'localization_id' => $localization->id,
            'title' => 'Annonce ' . Str::random(5) . ' Particulier',
            'description' => 'This is a description for a private user annonce.',
            'price' => rand(100, 1000),
            'email' => $privateUser->email,
            'phone' => $privateUser->phone,
            'publication_date' => now(),
            'status' => 'pending',
        ]);
    }
}
