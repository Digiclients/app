<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Attribute;
use App\Models\Localization;
use Illuminate\Http\Request;
use App\Models\LeboncoinData;

class ApiController extends Controller
{
    public function getLeboncoinData(Request $request)
    {
        // $LeboncoindData = LeboncoinData::select(
        //     'city',
        //     'u_car_brand',
        //     'u_car_model',
        //     'regdate',
        //     'fuel',
        //     'gearbox'
        // )->distinct()->get();

        // return response()->json([
        //     'LeboncoindData' => $LeboncoindData
        // ]);
        try {
            $LeboncoindData = LeboncoinData::select(
                // 'city',
                'u_car_brand',
                'u_car_model',
                'regdate',
                'fuel',
                'gearbox'
            )->distinct()->get();
            // $LeboncoindData = LeboncoinData::select(
            //     'city',
            //     'u_car_brand',
            //     'u_car_model',
            //     'regdate',
            //     'fuel',
            //     'gearbox'
            // )->orderBy('city')
            //     ->orderBy('u_car_brand')
            //     ->orderBy('u_car_model')
            //     ->orderBy('regdate')
            //     ->orderBy('fuel')
            //     ->orderBy('gearbox')
            //     ->get();


            return response()->json([
                'LeboncoindData' => $LeboncoindData
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getLeboncoinModeles(string $marque)
    {
        $modeles = LeboncoinData::where('u_car_brand', $marque)
            ->select('u_car_model')
            ->distinct()
            ->get();

        return response()->json([
            'modeles' => $modeles
        ]);
    }

    public function getLocations()
    {
        try {
            // Attempt to fetch the locations
            $locations = Localization::select('Localization')->get();

            // Return the locations as a JSON response
            return response()->json($locations);
        } catch (\Exception $e) {
            // Log the exception message for debugging
            \Log::error('Error fetching locations: ' . $e->getMessage());

            // Return a JSON response with an error message and a 500 status code
            return response()->json([
                'message' => 'An error occurred while fetching locations.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getRegions()
    {
        $regions = (new LeboncoinData())->getRegions();
        $regionKeys = array_keys($regions);
        return response()->json($regionKeys);
    }

    // public function searchLeboncoinCities(Request $request)
    // {
    //     $query = $request->input('query');

    //     // Perform the search in the database
    //     $results = LeboncoinData::where('city', 'LIKE', "%{$query}%")
    //         ->orWhere('zipcode', 'LIKE', "%{$query}%")
    //         ->get();

    //     return response()->json($results);
    // }
    public function searchLeboncoinCities(Request $request)
    {
        $query = $request->input('query');

        // Initialize the result array
        $results = [
            'cities' => [],
            'zipcodes' => [],
        ];

        if (is_numeric($query)) {
            // If the query is numeric, search for zipcodes
            $results['zipcodes'] = LeboncoinData::where('zipcode', 'LIKE', "%{$query}%")
                ->pluck('zipcode')
                ->unique();
        } else {
            // If the query is not numeric, search for cities
            $results['cities'] = LeboncoinData::where('city', 'LIKE', "%{$query}%")
                ->pluck('city')
                ->unique();
        }

        return response()->json($results);
    }



    public function getMarques(string $parentCategorySlug = "voitures")
    {
        try {
            // Attempt to find the parent category
            $parentCategory = Category::where('slug', $parentCategorySlug)->first();

            // Check if the category exists
            if ($parentCategory) {
                // Attempt to fetch the child categories
                $marques = Category::where('parent_category_id', $parentCategory->id)
                    ->where('main_category', true)
                    ->get();

                // Return the fetched categories as a JSON response
                return response()->json($marques);
            } else {
                // Return a 404 error response if the parent category is not found
                return response()->json(['message' => "Category $parentCategorySlug not found"], 404);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database query exceptions
            \Log::error('Database query error: ' . $e->getMessage());

            // Return a JSON response with a database error message
            return response()->json([
                'message' => 'Database query error while fetching marques.',
                'error' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            // Handle any other general exceptions
            \Log::error('Error fetching marques: ' . $e->getMessage());

            // Return a JSON response with a generic error message
            return response()->json([
                'message' => 'An error occurred while fetching marques.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getModels(string $marqueName)
    {

        try {
            // Attempt to find the parent category
            $marque = Category::where('category_name', $marqueName)->first();

            // Check if the category exists
            if ($marque) {
                // Attempt to fetch the child categories
                $marques = Category::where('parent_category_id', $marque->id)
                    ->where('main_category', false)
                    ->get();

                // Return the fetched categories as a JSON response
                return response()->json($marques);
            } else {
                // Return a 404 error response if the parent category is not found
                return response()->json(['message' => "$marque not found"], 404);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle database query exceptions
            \Log::error('Database query error: ' . $e->getMessage());

            // Return a JSON response with a database error message
            return response()->json([
                'message' => 'Database query error while fetching marques.',
                'error' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            // Handle any other general exceptions
            \Log::error('Error fetching marques: ' . $e->getMessage());

            // Return a JSON response with a generic error message
            return response()->json([
                'message' => 'An error occurred while fetching marques.',
                'error' => $e->getMessage()
            ], 500);
        }

    }



    public function getAttributesOptions()
    {
        $attributes = Attribute::with('attributesOption')
            ->whereIn('slug', ['carburant', 'boite_vitesse', 'couleur', 'permis', 'crit_air', 'etat_du_vehicule', 'type_vehicule', 'nombre_place', 'nombre_porte'])
            ->get()
            ->mapWithKeys(function ($attribute) {
                return [
                    $attribute->slug => $attribute->attributesOption->map(function ($option) {
                        return [
                            'id' => $option->id,
                            'value' => $option->optionValue,
                        ];
                    })
                ];
            });

        return $attributes;
    }




}
