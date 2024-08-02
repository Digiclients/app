<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\parameter\CitySeeder;
use Database\Seeders\parameter\ZipCodeSeeder;
use Database\Seeders\autorisations\RoleSeeder;
use Database\Seeders\parameter\LocalizationSeeder;
use Database\Seeders\autorisations\PermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(AttributesOptionSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ZipCodeSeeder::class);
        $this->call(LocalizationSeeder::class);
        $this->call(BoutiqueSeeder::class);
        $this->call(AnnonceSeeder::class);
        $this->call(AnnonceAttributesValueSeeder::class);
        $this->call(ImageSeeder::class);
        // $this->call(LeboncoinDataSeeder::class);
        // $this->call(PriceRangeDataSeeder::class);

    }
}
