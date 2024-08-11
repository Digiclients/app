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
    private function getAuthenticatedUser()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['message' => 'You need to log in first.']);
        }

        return $user;
    }
}
