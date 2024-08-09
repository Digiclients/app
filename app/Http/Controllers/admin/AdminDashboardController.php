<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\LeboncoinData;
use App\Models\PriceRangeData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class AdminDashboardController extends Controller
{
    public function index()
    {
        // return view('admin.index');
        return view('dashboard.AnalyticsDashboardv2');
    }

    public function options()
    {
        return view('dashboard.options');
    }

    // public function price_range(Request $request)
    // {
    //     $brands = LeboncoinData::select('u_car_brand')->distinct()->get();
    //     $price_range = PriceRangeData::paginate(10);

    //     return view('dashboard.dataRanges', compact('price_range', 'brands'));
    // }

    // public function price_range(Request $request)
    // {
    //     // Get the distinct brands for the select dropdown
    //     $brands = LeboncoinData::select('u_car_brand')->distinct()->get();

    //     // Initialize the query for price range data
    //     $query = PriceRangeData::query();

    //     // If a brand is selected, filter the price range data
    //     if ($request->has('brand') && $request->input('brand') !== '') {
    //         $request->validate([
    //             'brand' => ['required', 'string', 'exists:leboncoin_data,u_car_brand'],
    //         ]);

    //         $brand = $request->input('brand');
    //         $query->where('model-slug', 'LIKE', $brand . '_%');
    //     }

    //     // Get the paginated price range data
    //     $price_range = $query->paginate(10);

    //     // Pass the price range and brands to the view
    //     return view('dashboard.dataRanges', compact('price_range', 'brands'));
    // }

    public function price_range(Request $request)
    {
        $request->validate([
            'brand' => ['nullable', 'string', 'exists:leboncoin_data,u_car_brand'],
        ]);

        $brand = $request->input('brand');

        $brands = LeboncoinData::select('u_car_brand')->distinct()->get();

        // If brand is empty, don't apply any brand filter
        if ($brand) {
            $price_range = PriceRangeData::where('model-slug', 'LIKE', $brand . '_%')->paginate(10);
        } else {
            // Retrieve all price range data if no brand is specified
            $price_range = PriceRangeData::paginate(10);
        }

        return view('dashboard.dataRanges', compact('price_range', 'brands'));
    }

    public function update_price_range(Request $request)
    {
        $request->validate([
            'slug' => ['required'],
            'min' => ['required', 'integer'],
            'max' => ['required', 'integer'],
        ]);

        try {
            if ($request->input('slug') === 'all') {
                // Check if the brand parameter is present
                $brand = $request->input('brand');

                if ($brand) {
                    // Update records where model-slug starts with the specified brand
                    $updated = PriceRangeData::where('model-slug', 'like', $brand . '_%')->update([
                        'min-price' => $request->input('min'),
                        'max-price' => $request->input('max'),
                    ]);
                } else {
                    // Update all records if no brand is specified
                    $updated = PriceRangeData::query()->update([
                        'min-price' => $request->input('min'),
                        'max-price' => $request->input('max'),
                    ]);
                }
                // Update all records if slug is 'all'
                // $updated = PriceRangeData::query()->update([
                //     'min-price' => $request->input('min'),
                //     'max-price' => $request->input('max'),
                // ]);
            } else {
                // Update a specific record based on slug
                $updated = PriceRangeData::where('model-slug', $request->input('slug'))->update([
                    'min-price' => $request->input('min'),
                    'max-price' => $request->input('max'),
                ]);
            }

            if ($updated) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false, 'message' => 'Price range not found']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update price range']);
        }
    }

    // public function get_price_range(Request $request)
    // {
    //     // Validate the brand input
    //     $request->validate([
    //             'brand' => ['required', 'string', 'exists:leboncoin_data,u_car_brand'],
    //     ]);

    //     $brand = $request->input('brand');

    //     $brands = LeboncoinData::select('u_car_brand')->distinct()->get();
    //     // Retrieve all price range data where model-slug starts with the brand
    //     $price_range = PriceRangeData::where('model-slug', 'like', $brand . '_%')->paginate(10);

    //     return view('dashboard.dataRanges', compact('price_range', 'brands'));
    // }
}
