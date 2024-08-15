<?php

namespace App\Repositories;

use App\Models\Option;
use App\Models\LeboncoinData;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;

class LeboncoinDataRepository extends BaseRepository
{
    /**
     * Les champs de recherche disponibles .
     *
     * @var array
     */
    protected $fieldsSearchable = ['localization', 'u_car_brand', 'u_car_model', 'carburant', 'regdate', 'fuel', 'gearbox', 'mileage', 'horse_power_din', 'horsepower'];

    /**
     * Renvoie les champs de recherche disponibles.
     *
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldsSearchable;
    }

    /**
     * Constructeur de la classe ProjetRepository.
     */
    public function __construct()
    {
        parent::__construct(new LeboncoinData());
    }

    // TODO NEED TO REMOVE VEHICULE WHO DAMAGED
    // public function getPriceStatistics($search = [])
    // {
    //     $query = $this->model->newQuery();

    //     // Exclude records where model_slug exists in price_range_data, the price is between min_price and max_price
    //     $query->leftJoin('price_range_data', function ($join) {
    //         $join->on('leboncoin_data.model-slug', '=', 'price_range_data.model-slug')
    //             ->whereColumn('leboncoin_data.price', '>=', 'price_range_data.min-price')
    //             ->whereColumn('leboncoin_data.price', '<=', 'price_range_data.max-price');
    //     })
    //         ->whereNotNull('price_range_data.model-slug');

    //     // TODO: NEED TO DEVIDE THIS QUERY TO TWO ARRAY FIRST FOR ownerType = PRO AND SECOND FOR ownerType = PRIVATE, AND THEN NEED TO GET JUST 10% FROM FIRST ARRAY WHERE ownerType = PRO AND THEN MERGE 10% WITH ARRAY OF PRIVATE
    //     // AND NEED THIS TO BE PARAMETRABLE 10% IT IS PARAMETRABLE AND PRO, PRIVATE IT IS ALSO PARAMETRABLE

    //     // Apply filters using helper methods
    //     $this->applyLocalizationFilter($query, $search);
    //     $this->applyBrandFilter($query, $search);
    //     $this->applyModelFilter($query, $search);
    //     $this->applyFuelFilter($query, $search);
    //     $this->applyGearboxFilter($query, $search);
    //     $this->applyMileageFilter($query, $search);
    //     $this->applyRegdateFilter($query, $search);

    //     // Calculate and return the min, max, average prices, and count of results
    //     $priceStatistics = $query->selectRaw('MIN(price) as min_price, MAX(price) as max_price, AVG(price) as avg_price, COUNT(*) as count')
    //         ->first();

    //     return $priceStatistics;
    // }

    public function getPriceStatistics($search = [], $proPercentage = 100, $privatePercentage = 100, $applyOwnerTypeFilter = false, $ownerTypes = ['pro', 'private'])
    {
        // Options
        // $proPercentage =
        //     (int) (Option::select('value')
        //         ->where('option', Option::PROPERCENTAGE)
        //         ->first()->value ?? 10);

        // Step 1: Initial query to get all results
        $query = $this->model->newQuery();

        // Exclude records where model_slug exists in price_range_data, the price is between min_price and max_price
        $query
            ->leftJoin('price_range_data', function ($join) {
                $join->on('leboncoin_data.model-slug', '=', 'price_range_data.model-slug')->whereColumn('leboncoin_data.price', '>=', 'price_range_data.min-price')->whereColumn('leboncoin_data.price', '<=', 'price_range_data.max-price');
            })
            ->whereNotNull('price_range_data.model-slug');
            // ->select('leboncoin_data.id', 'leboncoin_data.price', 'leboncoin_data.ownerType');

        // Step 2: Apply filters to the query
        $this->applyLocalizationFilter($query, $search);
        $this->applyBrandFilter($query, $search);
        $this->applyModelFilter($query, $search);
        $this->applyTitleFilter($query, $search);
        $this->applyFuelFilter($query, $search);
        $this->applyGearboxFilter($query, $search);
        $this->applyMileageFilter($query, $search);
        $this->applyRegdateFilter($query, $search);

        // dd($proPercentage, $privatePercentage);
        
        if ($applyOwnerTypeFilter) {
            // Step 3: Get the filtered results
            $filteredResults = $query->select('leboncoin_data.id', 'leboncoin_data.price', 'leboncoin_data.ownerType')->get();
            // Separate results by ownerType
            $proResults = $filteredResults->where('ownerType', $ownerTypes[0]);
            $privateResults = $filteredResults->where('ownerType', $ownerTypes[1]);

            // Step 4: Get the subset of PRO results based on the configurable percentage
            $proCount = $proResults->count();
            $proSubset = $proResults->take(ceil($proCount * ($proPercentage / 100)));

            // Step 5: Get the subset of PRIVATE results based on the configurable percentage
            $privateCount = $privateResults->count();
            $privateSubset = $privateResults->take(ceil($privateCount * ($privatePercentage / 100)));

            // Merge the subsets of PRO and PRIVATE results
            $mergedResults = $proSubset->merge($privateSubset);

            // Convert merged results to array of IDs to filter the new query
            $mergedIds = $mergedResults->pluck('id')->toArray();
            $query = $this->model->newQuery()->whereIn('leboncoin_data.id', $mergedIds);
        }

        // dd($query->get());
        // Step 6: Calculate and return the min, max, average prices, and count of filtered results
        $priceStatistics = $query->selectRaw('MIN(price) as min_price, MAX(price) as max_price, AVG(price) as avg_price, COUNT(*) as count')->first();
        return $priceStatistics;
    }

    // protected function applyLocalizationFilter($query, $search)
    // {

    //     if (!empty($search['location'])) {
    //         $query->where('city', $search['location']);
    //     }
    // }

    protected function applyLocalizationFilter(Builder $query, array $search)
    {
        $regions = $this->model->getRegions();

        if (!empty($search['location'])) {
            $location = $search['location'];
            if ($location === 'Toute-la-France') {
                // If the location is 'Toute-la-France', apply no location filter (show all cities).
                return $query;
            }
            if (array_key_exists($location, $regions)) {
                $cities = $regions[$location];
                $query->whereIn('city', $cities);
            } else {
                // If the location is not a region, assume it is a city.
                $query->where('city', $location);
            }
        }

        return $query;
    }

    // public function applyTitleFilter(Builder $query, array $search)
    // {
    //     if (!empty($search['title'])) {
    //         $query->where('subject', 'like', '%' . $search['title'] . '%');
    //     }
    // }

    public function applyTitleFilter(Builder $query, array $search)
    {
        if (!empty($search['title'])) {
            // Standardize the search term by adding spaces between numbers and letters
            $searchTerm = $search['title'];
            $searchTerm = preg_replace('/([a-zA-Z])([0-9])/', '$1 $2', $searchTerm);
            $searchTerm = preg_replace('/([0-9])([a-zA-Z])/', '$1 $2', $searchTerm);

            // Apply the updated search term to the query
            $query->where('subject', 'like', '%' . $searchTerm . '%');
        }
    }

    protected function applyBrandFilter($query, $search)
    {
        if (!empty($search['marque'])) {
            $query->where('u_car_brand', $search['marque']);
        }
    }

    protected function applyModelFilter($query, $search)
    {
        // Split the string into an array by comma and trim any whitespace
        if (!empty($search['modele'])) {
            $models = array_map('trim', explode(',', $search['modele']));
            $query->whereIn('u_car_model', $models);
        }
    }

    protected function applyRegdateFilter($query, $search)
    {
        if (!empty($search['annee_modele'])) {
            $regdateRange = explode('-', $search['annee_modele']);
            $minRegdate = isset($regdateRange[0]) ? (int) $regdateRange[0] : null;
            $maxRegdate = isset($regdateRange[1]) ? (int) $regdateRange[1] : null;

            if ($minRegdate && $maxRegdate) {
                $query->whereBetween('regdate', [$minRegdate, $maxRegdate]);
            } elseif ($minRegdate) {
                $query->where('regdate', '>=', $minRegdate);
            } elseif ($maxRegdate) {
                $query->where('regdate', '<=', $maxRegdate);
            }
        }
    }

    protected function applyFuelFilter($query, $search)
    {
        if (!empty($search['carburant'])) {
            $carburants = array_map('trim', explode(',', $search['carburant']));
            $query->whereIn('fuel', $carburants);
        }
    }

    protected function applyGearboxFilter($query, $search)
    {
        if (!empty($search['boite_vitesse'])) {
            $boite_vitesses = array_map('trim', explode(',', $search['boite_vitesse']));
            $query->whereIn('gearbox', $boite_vitesses);
        }
    }

    protected function applyMileageFilter($query, $search)
    {
        if (!empty($search['kilometrage'])) {
            $mileageRange = explode('-', $search['kilometrage']);
            $minMileage = isset($mileageRange[0]) && is_numeric($mileageRange[0]) ? (int) $mileageRange[0] : null;
            $maxMileage = isset($mileageRange[1]) && is_numeric($mileageRange[1]) ? (int) $mileageRange[1] : null;

            if ($minMileage !== null && $maxMileage !== null) {
                $query->whereBetween('mileage', [$minMileage, $maxMileage]);
            } elseif ($minMileage !== null) {
                $query->where('mileage', '>=', $minMileage);
            } elseif ($maxMileage !== null) {
                $query->where('mileage', '<=', $maxMileage);
            }
        }
    }

    protected function applyHorsePowerDinFilter($query, $search)
    {
        if (!empty($search['puissance_din'])) {
            $horsePowerDin = explode('-', $search['puissance_din']);
            $minHorsePowerDin = isset($horsePowerDin[0]) ? (int) $horsePowerDin[0] : null;
            $maxHorsePowerDin = isset($horsePowerDin[1]) ? (int) $horsePowerDin[1] : null;

            if ($minHorsePowerDin && $maxHorsePowerDin) {
                $query->whereBetween('horse_power_din', [$minHorsePowerDin, $maxHorsePowerDin]);
            } elseif ($minHorsePowerDin) {
                $query->where('horse_power_din', '>=', $minHorsePowerDin);
            } elseif ($maxHorsePowerDin) {
                $query->where('horse_power_din', '<=', $maxHorsePowerDin);
            }
        }
    }

    protected function applyHorsepowerFilter($query, $search)
    {
        if (!empty($search['puissance_cv'])) {
            $horsepower = explode('-', $search['puissance_cv']);
            $minHorsepower = isset($horsepower[0]) ? (int) $horsepower[0] : null;
            $maxHorsepower = isset($horsepower[1]) ? (int) $horsepower[1] : null;

            if ($minHorsepower && $maxHorsepower) {
                $query->whereBetween('horsepower', [$minHorsepower, $maxHorsepower]);
            } elseif ($minHorsepower) {
                $query->where('horsepower', '>=', $minHorsepower);
            } elseif ($maxHorsepower) {
                $query->where('horsepower', '<=', $maxHorsepower);
            }
        }
    }
}
