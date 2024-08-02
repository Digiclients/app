<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * Sets up preconditions for each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->categoryRepository = new CategoryRepository();
    }


    private function getParentCategories()
    {
        return Category::whereNull('parent_category_id')->pluck('id')->first();
    }

    /**
     * Test retrieving child categories of a specific parent category.
     */
    public function testGetChildCategories()
    {
        $parentParentCategory = $this->categoryRepository->getParentParentCategory();
        $childsCategory = $this->categoryRepository->getChildsCategory(2);
        dd($childsCategory);
        // $childsCategory = Category::where('parent_category_id', $parentCategoryId)->get();
    }

}
