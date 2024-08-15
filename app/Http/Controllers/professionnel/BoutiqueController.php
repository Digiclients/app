<?php

namespace App\Http\Controllers\professionnel;

use App\Models\User;
use App\Models\Annonce;
use App\Models\Boutique;
use Illuminate\Support\Str;
use App\Models\Localization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BoutiqueController extends Controller
{
    public function index()
    {
        $user = $this->getAuthenticatedUser();
        $boutique = Boutique::with('localization')
            ->where('user_id', $user->id)
            ->first();
        if (!$boutique) {
            $boutique = null;
        }

        return view('professionnel.index', compact('user', 'boutique'));
    }

    public function boutique($boutiqueId, $slug)
    {
        // Find the Boutique by ID
        $boutique = Boutique::find($boutiqueId);
        $user = User::where('id', $boutique->user_id)->first();
        // $annonces = Annonce::with(['localization', 'images'])->where('boutique_id', $boutique->id)->first();
        $annonces = Annonce::with([
            'localization',
            'images' => function ($query) {
                $query->where('feature_img', 1);
            }
        ])->where('boutique_id', $boutique->id)->paginate(10);
        // dd($annonces);
        if (!$boutique || !$user) {
            return abort(404);
        }
        // dd($slug);
        return view('professionnel.boutique', compact('boutique', 'user', 'annonces'));
    }

    public function store(Request $request)
    {
        // dd($request->file('couverture')->getMimeType(), $request->file('couverture')->getClientOriginalExtension());
        // Validate the incoming request data
        $validatedData = $request->validate([
            'location' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:boutiques,slug',
            'website' => 'nullable|url',
            'street_address' => 'nullable|string|max:255',
            'siren' => 'nullable|string ',
            'couverture' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Find the corresponding localization based on the provided location
        $localization = Localization::where('localization', $request->location)->first();

        if (!$localization) {
            return back()->withErrors(['location' => 'Localization not found.']);
        }

        // Create the Boutique
        $boutique = Boutique::create([
            'user_id' => Auth::id(),
            'localization_id' => $localization->id,
            'name' => $validatedData['name'],
            'description' => $validatedData['description'] ?? null,
            'slug' => Str::slug($validatedData['slug']),
            'website' => $validatedData['website'] ?? null,
            'street_address' => $validatedData['street_address'] ?? null,
            'siren' => $validatedData['siren'] ?? null,
        ]);

        // Handle the file upload for couverture if provided
        if ($request->hasFile('couverture')) {
            $file = $request->file('couverture');
            $userId = Auth::id();
            $boutiqueId = $boutique->id;

            // Generate a UUID for the file
            $uuid = (string) Str::uuid();

            // Generate the new filename using boutiqueId, UUID, and userId
            $filename = "{$boutiqueId}-{$uuid}-{$userId}.{$file->getClientOriginalExtension()}";
            // Store the file with the new name
            $path = $file->storeAs('images', $filename, 'public');

            // Update the boutique with the path to the couverture
            $boutique->update(['cover' => $path]);
        }

        // Redirect or return a response after successful creation
        return redirect()->route('profile.boutique')->with('success', 'Boutique created successfully.');
    }

    public function update(Request $request, $id)
    {
        // Find the Boutique by ID
        $boutique = Boutique::find($id);

        if (!$boutique) {
            return back()->withErrors(['error' => 'Boutique not found.']);
        }

        // Validate the incoming request data
        $validatedData = $request->validate([
            'location' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:boutiques,slug,' . $id,
            'website' => 'nullable|url',
            'street_address' => 'nullable|string|max:255',
            'siren' => 'nullable|string',
            'couverture' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Find the corresponding localization based on the provided location
        $localization = Localization::where('localization', $request->location)->first();

        if (!$localization) {
            return back()->withErrors(['location' => 'Localization not found.']);
        }

        // Update the Boutique
        $boutique->update([
            'localization_id' => $localization->id,
            'name' => $validatedData['name'],
            'description' => $validatedData['description'] ?? null,
            'slug' => Str::slug($validatedData['slug']),
            'website' => $validatedData['website'] ?? null,
            'street_address' => $validatedData['street_address'] ?? null,
            'siren' => $validatedData['siren'] ?? null,
        ]);

        // Handle the file upload for couverture if provided
        if ($request->hasFile('couverture')) {
            $file = $request->file('couverture');
            $userId = Auth::id();
            $boutiqueId = $boutique->id;

            // Generate a UUID for the file
            $uuid = (string) Str::uuid();

            // Generate the new filename using boutiqueId, UUID, and userId
            $filename = "{$boutiqueId}-{$uuid}-{$userId}.{$file->getClientOriginalExtension()}";

            // Store the file with the new name
            $path = $file->storeAs('images', $filename, 'public');

            // Update the boutique with the path to the couverture
            $boutique->update(['cover' => $path]);
        }

        // Redirect or return a response after successful update
        return redirect()->route('profile.boutique')->with('success', 'Boutique updated successfully.');
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
