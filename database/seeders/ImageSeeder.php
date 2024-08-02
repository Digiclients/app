<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Annonce;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch the first two Annonce records
        $annonces = Annonce::take(2)->get();

        if ($annonces->isEmpty()) {
            return;
        }

        $images = [
            [
                'annonce_id' => $annonces[0]->id,
                'blog_id' => null, // Assuming no blog_id for now
                'alt' => 'Image 1 for Annonce ' . $annonces[0]->id,
                'path' => 'path/to/image1.jpg',
                'feature_img' => true,
            ],
            [
                'annonce_id' => $annonces[0]->id,
                'blog_id' => null,
                'alt' => 'Image 2 for Annonce ' . $annonces[0]->id,
                'path' => 'path/to/image2.jpg',
                'feature_img' => false,
            ],
            [
                'annonce_id' => $annonces[1]->id,
                'blog_id' => null,
                'alt' => 'Image 1 for Annonce ' . $annonces[1]->id,
                'path' => 'path/to/image3.jpg',
                'feature_img' => true,
            ],
            [
                'annonce_id' => $annonces[1]->id,
                'blog_id' => null,
                'alt' => 'Image 2 for Annonce ' . $annonces[1]->id,
                'path' => 'path/to/image4.jpg',
                'feature_img' => false,
            ],
        ];

        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
