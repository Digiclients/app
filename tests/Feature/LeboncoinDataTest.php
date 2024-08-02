<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\LeboncoinData;
use Database\Seeders\LeboncoinDataSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use App\Repositories\LeboncoinDataRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class LeboncoinDataTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @var LeboncoinDataRepository
     */
    protected $leboncoinDataRepository;

    /**
     * Sets up preconditions for each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->leboncoinDataRepository = new LeboncoinDataRepository();
        // $this->seedLeboncoinData(); // Seeds the database with test data
    }

    /**
     * Seeds the database with test data.
     */
    protected function seedLeboncoinData()
    {
        $this->artisan('db:seed', ['--class' => LeboncoinDataSeeder::class]);
    }

    /**
     * Test getAveragePrice with no filters.
     */
    public function testGetAveragePriceWithoutFilters()
    {
        $averagePrice = $this->leboncoinDataRepository->getPriceStatistics();
        dd($averagePrice);
        $this->assertNotNull($averagePrice);
    }

    /**
     * Test getAveragePrice with city filter.
     */
    public function testGetAveragePriceWithCityFilter()
    {
        $averagePrice = $this->leboncoinDataRepository->getPriceStatistics(['locations' => '69230']);
        $this->assertNotNull($averagePrice);
    }

    /**
     * Test getAveragePrice with mileage range filter.
     */
    public function testGetAveragePriceWithMileageRangeFilter()
    {
        $averagePrice = $this->leboncoinDataRepository->getPriceStatistics(['mileage' => '100-60000']);
        // dd($averagePrice);
        $this->assertNotNull($averagePrice);
    }

    /**
     * Test getAveragePrice with multiple filters.
     */
    public function testGetAveragePriceWithMultipleFilters()
    {
        $averagePrice = $this->leboncoinDataRepository->getPriceStatistics([
            'locations' => '69230',
            'u_car_brand' => 'FORD',
            'gearbox' => 'Manuelle',
            'mileage' => '100-100000',
        ]);
        $this->assertNotNull($averagePrice);
    }

    /**
     * Test getAveragePrice with no matching filters.
     */
    // public function testGetAveragePriceWithNoMatchingFilters()
    // {
    //     $averagePrice = $this->leboncoinDataRepository->getPriceStatistics([
    //         'locations' => '40000',
    //         'u_car_brand' => 'BMW',
    //     ]);
    //     $this->assertNull($averagePrice);
    // }
}
