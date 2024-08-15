<?php

namespace App\Http\Controllers;

use App\Models\LeadsData;
use App\Models\AveragePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Repositories\LeboncoinDataRepository;

class HomeController extends Controller
{
    protected $leboncoinDataRepository;
    public function __construct(LeboncoinDataRepository $leboncoinDataRepository)
    {
        $this->leboncoinDataRepository = $leboncoinDataRepository;
    }

    public function index(Request $request)
    {
        try {
            // Check authentication and cookie
            $isAuthenticated = Auth::check();
            $hasUserAccessCookie = Cookie::get('user_access') === 'true';
            $searchCountCookie = Cookie::get('searchCount');

            // Convert searchCountCookie to integer
            $searchCount = (int) $searchCountCookie;

            // Check if user needs to provide information
            if (!$isAuthenticated && !$hasUserAccessCookie) {
                if ($searchCount >= 3) {
                    session()->flash('error', 'Veuillez saisir vos informations pour accéder au prix moyen.');
                    return view('home');
                }
            }

            $filters = $request->only(['title', 'location', 'marque', 'modele', 'annee_modele', 'carburant', 'boite_vitesse', 'kilometrage', 'pro', 'private']);


            // Initialize the priceStatistics variable
            $priceStatistics = null;

            // Call getPriceStatistics only if filters are applied
            // if (!empty($filters)) {
            //     $priceStatistics = $this->leboncoinDataRepository->getPriceStatistics($filters);
                //     // Save or update the average price data in the database
            //     if ($priceStatistics) {
            //         $this->saveOrUpdateAveragePrice($filters, $priceStatistics);
            //     }
            // }

            if (!empty($filters)) {
                $applyOwnerTypeFilter = isset($filters['pro']) || isset($filters['private']);
                // $applyOwnerTypeFilter = !empty($filters['pro']) || !empty($filters['private']);
                $priceStatistics = $this->leboncoinDataRepository->getPriceStatistics(
                    $filters,
                    $applyOwnerTypeFilter ? (int) $filters['pro'] : 10, // Default values if not provided
                    $applyOwnerTypeFilter ? (int) $filters['private'] : 100,
                    $applyOwnerTypeFilter,
                );

                if ($priceStatistics) {
                    $this->saveOrUpdateAveragePrice($filters, $priceStatistics);
                }
            }
            // Return the view with price statistics
            return view('home', compact('priceStatistics'));
        } catch (\Exception $e) {
            return abort(500);
        }
    }

    public function saveUserInfo(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Save to leads_data table
        LeadsData::create($data);

        // Set a cookie to track the user
        // Cookie::queue('user_access', true, 60 * 24 * 30); // Cookie valid for 30 days

        Cookie::queue('user_access', 'true', 60 * 24 * 30, '/', null, false, false); // 30 days expiry

        return response()->json(['success' => true]);
    }

    public function isAuthenticate(Request $request)
    {
        // Check if user is authenticated and if the cookie is present
        $isAuthenticated = Auth::check();
        $cookiePresent = $request->cookie('user_access') === 'true';

        return response()->json([
            'authenticated' => $isAuthenticated,
            'cookiePresent' => $cookiePresent,
        ]);
    }

    private function saveOrUpdateAveragePrice($filters, $priceStatistics)
    {
        // Split range values
        if (!empty($filters['annee_modele'])) {
            $anneeModeleRange = explode('-', $filters['annee_modele']);
            $anneeModeleMin = $anneeModeleRange[0] === 'min' ? null : $anneeModeleRange[0];
            $anneeModeleMax = $anneeModeleRange[1] === 'max' ? null : $anneeModeleRange[1];
        } else {
            $anneeModeleMin = null;
            $anneeModeleMax = null;
        }

        if (!empty($filters['kilometrage'])) {
            $kilometrageRange = explode('-', $filters['kilometrage']);
            $kilometrageMin = $kilometrageRange[0] === 'min' ? null : $kilometrageRange[0];
            $kilometrageMax = $kilometrageRange[1] === 'max' ? null : $kilometrageRange[1];
        } else {
            $kilometrageMin = null;
            $kilometrageMax = null;
        }
        $data = [
            'location' => $filters['location'] ?? null,
            'marque' => $filters['marque'] ?? null,
            'modele' => $filters['modele'] ?? null,
            'title' => $filters['title'] ?? null,
            'annee_modele_min' => $anneeModeleMin ?? null,
            'annee_modele_max' => $anneeModeleMax ?? null,
            'carburant' => $filters['carburant'] ?? null,
            'boite_vitesse' => $filters['boite_vitesse'] ?? null,
            'kilometrage_min' => $kilometrageMin ?? null,
            'kilometrage_max' => $kilometrageMax ?? null,
            'average_price' => $priceStatistics['avg_price'] ?? null,
            'min_price' => $priceStatistics['min_price'] ?? null,
            'max_price' => $priceStatistics['max_price'] ?? null,
        ];

        // dd($data);
        AveragePrice::updateOrCreate(
            [
                'location' => $data['location'],
                'marque' => $data['marque'],
                'modele' => $data['modele'],
                'title' => $data['title'],
                'annee_modele_min' => $data['annee_modele_min'],
                'annee_modele_max' => $data['annee_modele_max'],
                'carburant' => $data['carburant'],
                'boite_vitesse' => $data['boite_vitesse'],
                'kilometrage_min' => $data['kilometrage_min'],
                'kilometrage_max' => $data['kilometrage_max'],
            ],
            $data,
        );
    }

    public function incrementSearchCount(Request $request)
    {
        $searchCount = $request->cookie('searchCount', 0);
        $searchCount++;
        $minutes = 30 * 24 * 60; // 30 days

        // Set the cookie
        Cookie::queue('searchCount', $searchCount, $minutes);

        return response()->json([
            'success' => true,
            'searchCount' => $searchCount,
        ]);
    }
}
