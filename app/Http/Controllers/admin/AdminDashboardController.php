<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Option;
use App\Models\LeadsData;
use App\Models\AveragePrice;
use Illuminate\Http\Request;
use App\Models\LeboncoinData;
use App\Models\PriceRangeData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $leboncoinDataCount = LeboncoinData::count();
        $UsersCount = User::count();
        $AveragePricesCount = AveragePrice::count();
        $LeadsCount = LeadsData::count();
        return view('dashboard.AnalyticsDashboardv2', compact('leboncoinDataCount', 'UsersCount', 'AveragePricesCount', 'LeadsCount'));
    }

    public function options()
    {
        $options = Option::paginate(20);
        return view('dashboard.options', compact('options'));
    }
    public function update_option_value(Request $request)
    {
        $request->validate([
            'dataId' => ['required', 'integer'],
            'optionValue' => ['required'],
        ]);

        try {
            $updated = Option::where('id', $request->input('dataId'))->update([
                'value' => $request->input('optionValue'),
            ]);

            if ($updated) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false, 'message' => 'option value not found']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => "Failed to update option value, $e"]);
        }
    }

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

}
