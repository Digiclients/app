<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Boutique;
use Illuminate\Support\Str;
use App\Models\Localization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BoutiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the number of boutiques to create
        $numberOfBoutiques = 1;

        // Fetch all professional users
        $professionalUsers = User::where('sellerType', User::PROFESSIONNEL)->get();

        // Fetch all localizations
        $localizations = Localization::all();

        // Check if there are enough professional users and localizations
        if ($professionalUsers->isEmpty() || $localizations->isEmpty()) {
            $this->command->info('No professional users or localizations found, skipping Boutique seeding.');
            return;
        }

        // Create boutiques
        foreach ($professionalUsers as $user) {
            foreach ($localizations->random($numberOfBoutiques) as $localization) {
                Boutique::create([
                    'user_id' => $user->id,
                    'localization_id' => $localization->id,
                    'name' => 'Boutique ' . Str::random(5),
                    'description' => 'This is a description for Boutique ' . Str::random(5),
                    'slug' => Str::slug('Boutique ' . Str::random(5)),
                    'website' => 'https://www.boutique' . Str::random(5) . '.com',
                    'street_address' => Str::random(10) . ' Street',
                    'converment_id' => Str::random(10),
                ]);
            }
        }
    }
}
