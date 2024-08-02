<?php

namespace App\Http\Controllers;

use App\Models\ShareableLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class ShareableLinkController extends Controller
{
    public function generateShareableLink(Request $request)
    {
        // Validate the request
        $request->validate([
            'location' => 'nullable|string',
            'marque' => 'nullable|string',
            'modele' => 'nullable|string',
            'annee_modele' => 'nullable|string',
            'carburant' => 'nullable|string',
            'boite_vitesse' => 'nullable|string',
            'kilometrage' => 'nullable|string',
        ]);

        try {
            // $id = Str::uuid()->toString();
            $uniqueId = Str::uuid(); // Generate a unique ID if needed

            // Store the request data with the generated ID
            \DB::table('shareable_links')->insert([
                'unique_id' => $uniqueId, // Ensure this field is included
                'filters' => json_encode($request->all()),
                'date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $url = URL::to('/') . '/result/' . $uniqueId;

            return response()->json(['url' => $url]);

        } catch (\Exception $e) {
            \Log::error('Error generating shareable link: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to generate shareable link'], 500);
        }
    }

    public function redirectToOriginal($id)
    {
        // Retrieve the original filters from the database using the ID
        $link = \DB::table('shareable_links')->where('unique_id', $id)->first();

        if ($link) {
            // Redirect to the original page with the filters
            $filters = json_decode($link->filters, true);
            $query = http_build_query($filters);
            return redirect('/?' . $query);
            // return redirect()->route('home') . '?' . $query;
        }

        // If the ID is not found, return a 404 response
        return abort(404);
    }
}
