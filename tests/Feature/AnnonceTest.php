<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Annonce;
use App\Models\Boutique;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\Localization;
use App\Models\AttributesOption;
use App\Repositories\AnnonceRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnnonceTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @var AnnonceRepository
     */
    protected $annonceRepository;

    /**
     * Sets up preconditions for each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->annonceRepository = new AnnonceRepository();
    }

    // public function testCreateAnnonce()
    // {
    //     $userId = User::pluck('id')->first();
    //     $boutiqueId = Boutique::where('user_id', $userId)->pluck('id')->first();
    //     $category = Category::where('main_category', false)->first();
    //     $localizationId = Localization::pluck('id')->first();

    //     $annonceData = [
    //         'user_id' => $userId,
    //         'boutique_id' => $boutiqueId ? $boutiqueId : null,
    //         'category_id' => $category->id,
    //         'localization_id' => $localizationId,
    //         'title' => 'Annonce Title',
    //         'description' => 'Annonce Description',
    //         'price' => 1000,
    //         'email' => 'example@example.com',
    //         'phone' => '123456789',
    //         'publication_date' => now(),
    //         'status' => 'Pending',
    //     ];

    //     $categoryRepository = new CategoryRepository();
    //     $parentCategory = $categoryRepository->getFirstChildCategoryBySlug($category->slug);

    //     // Ensure the parent category is found and has an id
    //     if (!$parentCategory || !isset($parentCategory['id'])) {
    //         $this->fail('Parent category not found or does not have an id.');
    //     }

    //     $attributes = Attribute::where('category_id', $parentCategory['id'])->get();
    //     $attributeOptions = AttributesOption::whereIn('attribute_id', $attributes->pluck('id'))->get();


    //     $attributesData = [];

    //     foreach ($attributes as $attribute) {
    //         // Find the first option for the current attribute, if it exists
    //         $option = $attributeOptions->where('attribute_id', $attribute->id)->first();
    //         $attributesData[] = [
    //             'slug' => $attribute->slug,
    //             'attributeOption_id' => $option ? $option->id : null,
    //             'attributeValue' => $option ? $option->optionValue : $attribute->slug . ' value',
    //         ];
    //     }





    //     $annonce = $this->annonceRepository->createAnnonce($annonceData, $attributesData);


    //     // $this->assertNotNull($annonce, 'Annonce creation failed.');
    //     // $this->assertDatabaseHas('annonces', ['id' => $annonce->id]);


    //     $this->assertNotNull($annonce, 'Annonce creation failed.');
    //     $this->assertDatabaseHas('annonces', ['id' => $annonce->id]);

    //     // Assert that attributes were inserted correctly
    //     foreach ($attributesData as $attributeData) {
    //         $this->assertDatabaseHas('annonce_attributes_values', [
    //             'annonce_id' => $annonce->id,
    //             'attribute_id' => Attribute::where('slug', $attributeData['slug'])->first()->id,
    //             'attributeOption_id' => $attributeData['attributeOption_id'],
    //             'attributeValue' => $attributeData['attributeValue'],
    //         ]);
    //     }
    // }


    // public function testAnnoncesListings()
    // {
    //     $result = $this->annonceRepository->AnnoncesListings();
    //     dd($result);

    // }

    public function testAnnonceDetails()
    {
        $annonceDetails = $this->annonceRepository->getAnnonceDetails(4);
        dd($annonceDetails);

    }



}
