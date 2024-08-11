<?php

namespace App\Http\Controllers\professionnel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BoutiqueController extends Controller
{
    public function index()
    {
        $user = $this->getAuthenticatedUser();

        return view('professionnel.index', compact('user'));
    }

    public function store(Request $request)
    {
        //    "location" => "Paris-75001"
        //   "name" => "Branden Clark"
        //   "description" => "Doloremque quasi est"
        //   "slug" => "Blanditiis sed non m"
        //   "website" => "https://www.raxagepunanivyx.org"
        //   "street_address" => "https://www.goqumanoteni.com.au"
        //   "siren" => "https://www.miketivegaho.co"
        //   "couverture" => "Screenshot 2024-08-11 at 02-12-39 Laravel.png"
        dd($request);
    }

    private function getAuthenticatedUser()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()
                ->route('login')
                ->withErrors(['message' => 'You need to log in first.']);
        }

        return $user;
    }
}
