<?php

namespace App\Repositories;

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
    protected $fieldsSearchable = [
        'localization',
        'u_car_brand',
        'u_car_model',
        'carburant',
        'regdate',
        'fuel',
        'gearbox',
        'mileage',
        'horse_power_din',
        'horsepower',
    ];

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

    // public function getPriceStatistics($search = [], $percentagePro = 10, $percentagePrivate = 100)
    // {
    //     // Calculate the actual percentages
    //     $percentagePro = max(0, min(100, $percentagePro)) / 100;
    //     $percentagePrivate = max(0, min(100, $percentagePrivate)) / 100;

    //     // Calculate the limits based on the percentage
    //     $proCount = $this->model->newQuery()->where('ownerType', 'pro')->count();
    //     $privateCount = $this->model->newQuery()->where('ownerType', 'private')->count();

    //     $proLimit = (int) floor($proCount * $percentagePro);
    //     $privateLimit = (int) floor($privateCount * $percentagePrivate);

    //     // Get the records where ownerType = 'pro'
    //     $proSubquery = $this->model->newQuery()
    //         ->select('*')
    //         ->where('ownerType', 'pro')
    //         ->inRandomOrder()
    //         ->limit($proLimit)
    //         ->toBase();

    //     // Get the records where ownerType = 'private'
    //     $privateSubquery = $this->model->newQuery()
    //         ->select('*')
    //         ->where('ownerType', 'private')
    //         ->inRandomOrder()
    //         ->limit($privateLimit)
    //         ->toBase();

    //     // Combine the subqueries using union
    //     $query = DB::table(DB::raw("({$proSubquery->toSql()}) as pro_records"))
    //         ->mergeBindings($proSubquery)
    //         ->unionAll(
    //             DB::table(DB::raw("({$privateSubquery->toSql()}) as private_records"))
    //                 ->mergeBindings($privateSubquery)
    //         );

    //     // Exclude records where model_slug exists in price_range_data and the price is between min_price and max_price
    //     $query = DB::table(DB::raw("({$query->toSql()}) as combined_records"))
    //         ->mergeBindings($query)
    //         ->leftJoin('price_range_data', function ($join) {
    //             $join->on('combined_records.model-slug', '=', 'price_range_data.model-slug')
    //                 ->whereColumn('combined_records.price', '>=', 'price_range_data.min-price')
    //                 ->whereColumn('combined_records.price', '<=', 'price_range_data.max-price');
    //         })
    //         ->whereNull('price_range_data.model-slug');

    //     // Apply filters using helper methods
    //     $this->applyLocalizationFilter($query, $search);
    //     $this->applyBrandFilter($query, $search);
    //     $this->applyModelFilter($query, $search);
    //     $this->applyGearboxFilter($query, $search);
    //     $this->applyMileageFilter($query, $search);
    //     $this->applyRegdateFilter($query, $search);
    //     $this->applyHorsePowerDinFilter($query, $search);
    //     $this->applyHorsepowerFilter($query, $search);

    //     dd($query->get());

    //     // Calculate and return the min, max, and average prices
    //     $priceStatistics = $query->selectRaw('MIN(combined_records.price) as min_price, MAX(combined_records.price) as max_price, AVG(combined_records.price) as avg_price')
    //         ->first();

    //     return $priceStatistics;
    // }



    // TODO NEED TO REMOVE VEHICULE WHO DAMAGED
    public function getPriceStatistics($search = [])
    {
        $query = $this->model->newQuery();

        // Exclude records where model_slug exists in price_range_data, the price is between min_price and max_price
        // $query->leftJoin('price_range_data', function ($join) {
        //     $join->on('leboncoin_data.model-slug', '=', 'price_range_data.model-slug')
        //         ->whereColumn('leboncoin_data.price', '>=', 'price_range_data.min-price')
        //         ->whereColumn('leboncoin_data.price', '<=', 'price_range_data.max-price');
        // })
        //     ->whereNotNull('price_range_data.model-slug');

        // dd($query->get());
        //  // Exclude records where leboncoin_data.vehicle_damage is 'Non endommagé'
        // $query->where('leboncoin_data.vehicle_damage', '<>', 'Endommagé');

        // Apply filters using helper methods
        $this->applyLocalizationFilter($query, $search);
        $this->applyBrandFilter($query, $search);
        $this->applyModelFilter($query, $search);
        $this->applyFuelFilter($query, $search);
        $this->applyGearboxFilter($query, $search);
        $this->applyMileageFilter($query, $search);
        $this->applyRegdateFilter($query, $search);

        // // Calculate and return the average price
        // $averagePrice = $query->avg('price');

        // dd($query->get());

        // return $averagePrice;
        // Calculate and return the min, max, and average prices
        // $priceStatistics = $query->selectRaw('MIN(price) as min_price, MAX(price) as max_price, AVG(price) as avg_price')
        //     ->first();

        // Calculate and return the min, max, average prices, and count of results
        $priceStatistics = $query->selectRaw('MIN(price) as min_price, MAX(price) as max_price, AVG(price) as avg_price, COUNT(*) as count')
            ->first();

        // dd($priceStatistics);

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


    protected function applyAllCities($query, $search)
    {

    }




    // protected function applyRegions($query, $region)
    // {

    //     $regions = LeboncoinData::getRegions();

    //     // Check if the region exists in the $regions array
    //     if (array_key_exists($region, $regions)) {
    //         $cities = $regions[$region];
    //         // Apply the query to filter by cities in the specified region
    //         $query->whereIn('city', $cities);
    //     } else {
    //         // Handle the case where the region does not exist
    //         // You can throw an exception, log an error, or simply do nothing
    //         // For this example, we'll just log a warning
    //     }

    //     return $query;
    // }




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
