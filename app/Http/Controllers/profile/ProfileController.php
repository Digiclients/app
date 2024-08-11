<?php

namespace App\Http\Controllers\profile;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\AnnonceRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    protected $annonceRepository;
    public function __construct(AnnonceRepository $annonceRepository)
    {
        $this->annonceRepository = $annonceRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = $this->getAuthenticatedUser();
        return view('profile.index', compact('user'));
    }

    public function annonces()
    {
        $user = $this->getAuthenticatedUser();
        $annonces = $this->annonceRepository->UserAnnonces($user->id, 20);
        return view('profile.annonces', compact('user', 'annonces'));
    }

    public function favourites()
    {
        $user = $this->getAuthenticatedUser();
        return view('profile.favourites', compact('user'));
    }

    private function getAuthenticatedUser()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['message' => 'You need to log in first.']);
        }

        return $user;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validation = [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'phone' => ['required', 'string', 'min:10'],
        //     'sellerType' => ['required', 'string', Rule::in([User::PROFESSIONNEL, User::PARTICULIER])],
        // ];
        if ($request->form_type === 'profile_update') {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $request->user()->id],
                'phone' => ['required', 'string', 'min:10'],
                'sellerType' => ['required', 'string', Rule::in([User::PROFESSIONNEL, User::PARTICULIER])],
            ]);

            $user = $request->user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->sellerType = $request->sellerType;
            $user->save();

            return redirect()->route('profile.home')->with('success', 'Mise à jour du profil réussie.');
        }

        if ($request->form_type === 'password_update') {
            $request->validate([
                'current_password' => ['required', 'string'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $user = $request->user();

            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->route('profile.home')->withErrors(['current_password' => 'Ce mot de passe est incorrect.']);
            }

            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('profile.home')->with('success', 'Mot de passe mis à jour avec succès.');
        }

        return redirect()->route('profile.home')->withErrors(['form_type' => 'Soumission de formulaire non valide.']);
    }

    public function updateAvatar(Request $request)
    {
        try {
            $request->validate([
                'avatar' => ['required', 'image', 'max:2048'], // max 2MB
            ]);

            $user = $request->user();
            // Delete the old avatar if it exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $file = $request->file('avatar');

            // Generate a UUID for the file
            $uuid = (string) Str::uuid(); // Generate a UUID and convert to string
            $filename = "{$user->id}-{$uuid}.{$file->getClientOriginalExtension()}";

            // Store the file with the new name
            $path = $file->storeAs('avatars', $filename, 'public'); // Adjust path and disk as needed

            // Update the user's avatar path
            $user->avatar = $path;
            $user->save();

            return redirect()->route('profile.home')->with('success', 'Avatar mis à jour avec succès.');
        } catch (ValidationException $e) {
            // Handle validation errors, including file size issues
            $errors = $e->errors();
            $fileSizeErrors = $errors['avatar'][0] ?? 'Impossible de mettre à jour l\'avatar. Veuillez réessayer plus tard.';

            return redirect()->route('profile.home')->withErrors(['avatar' => $fileSizeErrors]);
        } catch (\Exception $e) {
            return redirect()->route('profile.home')->withErrors(['avatar' => "Impossible de mettre à jour l'avatar. Veuillez réessayer plus tard."]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
