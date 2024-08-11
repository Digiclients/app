<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Annonce;
use App\Models\Boutique;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\Localization;
use Illuminate\Http\Request;
use App\Models\AttributesOption;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AnnonceAttributesValue;
use App\Repositories\AnnonceRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Str; // For generating random
use Illuminate\Support\Facades\Validator; // Import Validator facade for manual validation

class AnnonceController extends Controller
{
    protected $annonceRepository;
    public function __construct(AnnonceRepository $annonceRepository)
    {
        $this->annonceRepository = $annonceRepository;
    }

    public function index()
    {
        // return view('deposer-une-annonce');
    }

    public function create()
    {
        return view('deposer-une-annonce');
    }

    public function store(Request $request)
    {
        $maxYear = date('Y') + 1;
        $rules = [
            'title' => 'required|string|max:255',
            'marque' => 'required|string|exists:categories,category_name',
            'modele' => 'required|string|exists:categories,category_name',
            'price' => 'required|int|min:100',
            'description' => 'required|string',
            'annee_modele' => "required|int|min:1850|max:$maxYear",
            'date_premiere_mise_en_circulation' => 'required|date',
            'carburant' => 'required|int|exists:attributes_options,id',
            'boite_vitesse' => 'required|int|exists:attributes_options,id',
            'kilometrage' => 'required|int',
            'permis' => 'required|int|exists:attributes_options,id',
            'etat_du_vehicule' => 'required|int|exists:attributes_options,id',
            'nombre_place' => 'nullable|int|exists:attributes_options,id',
            'couleur' => 'nullable|int|exists:attributes_options,id',
            'nombre_porte' => 'required|int|exists:attributes_options,id',
            'puissance_fiscale' => 'nullable|int',
            'puissance_DIN' => 'nullable|int',
            'matricule' => 'required|string',
            'crit_air' => 'required|int|exists:attributes_options,id',
            'type_vehicule' => 'required|int|exists:attributes_options,id',
            'location' => 'required|exists:localizations,localization',
            'email' => 'required|email',
            'phone' => 'required',
        ];

        $validatedData = $request->validate($rules);

        DB::beginTransaction();

        try {
            $boutique_id = Boutique::where('user_id', Auth::user()->id)
                ->pluck('id')
                ->first();
            $category_id = Category::where('category_name', $request->input('modele'))->pluck('id')->first();
            $localization_id = Localization::where('localization', $request->input('location'))->pluck('id')->first();

            if (!$category_id || !$localization_id) {
                return abort(500);
            }

            $annonceData = [
                'user_id' => Auth::user()->id,
                'boutique_id' => $boutique_id ? $boutique_id : null,
                'category_id' => $category_id,
                'localization_id' => $localization_id,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ];

            // Initialize an array to hold attribute data
            $attributesData = [];

            // List of attributes that are integers
            $integerAttributes = ['carburant', 'boite_vitesse', 'permis', 'etat_du_vehicule', 'nombre_place', 'couleur', 'nombre_porte', 'crit_air', 'type_vehicule'];

            // List of attributes that are strings
            $stringAttributes = ['matricule', 'annee_modele', 'date_premiere_mise_en_circulation', 'kilometrage', 'puissance_fiscale', 'puissance_DIN'];

            // Process integer attributes
            foreach ($integerAttributes as $slug) {
                $attribute = Attribute::where('slug', $slug)->first();
                if ($attribute) {
                    $attribute_id = $attribute->id;

                    // Check if the attribute option exists
                    $attributeOption = AttributesOption::where('attribute_id', $attribute_id)->where('id', $request->input($slug))->first();

                    $attributesData[] = [
                        'annonce_id' => '', // This will be set later after saving the annonce
                        'attribute_id' => $attribute_id,
                        'attributeOption_id' => $attributeOption ? $attributeOption->id : null,
                        'attributeValue' => $attributeOption ? $attributeOption->optionValue : $request->input($slug),
                    ];
                } else {
                    return abort(500);
                }
                // TODO: YOU NEED TO HANDLE ELSE HERE
            }

            // Process string attributes
            foreach ($stringAttributes as $slug) {
                $attribute = Attribute::where('slug', $slug)->first();
                if ($attribute) {
                    $attribute_id = $attribute->id;

                    $attributesData[] = [
                        'annonce_id' => '', // This will be set later after saving the annonce
                        'attribute_id' => $attribute_id,
                        'attributeOption_id' => null,
                        'attributeValue' => $request->input($slug),
                    ];
                } else {
                    return abort(404);
                }
            }

            // Save the annonce data to the database
            $annonce = $this->annonceRepository->create($annonceData);

            // Assign the annonce_id to the attributesData
            foreach ($attributesData as &$attributeData) {
                $attributeData['annonce_id'] = $annonce->id;
            }

            // Save the attribute data
            foreach ($attributesData as $data) {
                // Assuming you have a model for the attribute data
                AnnonceAttributesValue::create($data);
            }

            DB::commit();

            return redirect()
                ->route('images-annonce', $annonce->id)
                ->with('success', 'Annonce created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()
                ->route('home')
                ->with('error', 'Failed to create annonce: ' . $e->getMessage());
        }
    }

    public function listings()
    {
        // TODO need to hundel exception
        $annonceListings = $this->annonceRepository->AnnoncesListings(20);
        $annoncesCount = Annonce::where('status', Annonce::ACTIVE)->count();
        return view('listings', compact('annonceListings', 'annoncesCount'));
    }

    public function show(int $annonceId)
    {
        // TODO need to hundel exception
        $annonce = $this->annonceRepository->find($annonceId);
        $user = User::where('id', $annonce->user_id)->first();
        $annoncesUserCount = Annonce::where('user_id', $user->id)->count();
        if (!$annonce || !$user || !$annoncesUserCount) {
            return abort(404);
        }
        $annonceDetails = $this->annonceRepository->getAnnonceDetails($annonce->id);
        // $associatedAnnonces = Annonce::where('category_id', $annonce->category_id)->where('id', $annonce->id)->take(5);
        $associatedAnnonces = Annonce::where('annonces.category_id', $annonce->category_id)
            ->where('annonces.id', '!=', $annonce->id)
            ->orderBy('annonces.publication_date', 'desc')
            ->take(5)
            ->join('localizations as l', 'annonces.localization_id', '=', 'l.id')
            ->leftJoin('images as i', function ($join) {
                $join->on('annonces.id', '=', 'i.annonce_id')->where('i.feature_img', '=', 1);
            })
            ->join('users as u', 'annonces.user_id', '=', 'u.id') // Join with the users table
            ->select('annonces.id', 'annonces.title', 'annonces.publication_date', 'annonces.price', 'u.sellerType', 'l.localization', 'i.path as feature_image_path')
            ->get();

        return view('annonce', compact('annonceDetails', 'user', 'annoncesUserCount', 'associatedAnnonces'));
    }

    public function edit(int $annonceId)
    {
        // Find the annonce by ID
        $annonce = $this->annonceRepository->find($annonceId);

        // Check if the annonce exists
        if (!$annonce) {
            return abort(404);
        }

        // Fetch the attributes and their values associated with the annonce
        $attributes = AnnonceAttributesValue::where('annonce_id', $annonceId)
            ->with(['attribute', 'attributeOption'])
            ->get();

        // Prepare data for the view
        $attributesData = [];
        foreach ($attributes as $attributeValue) {
            $attributeSlug = $attributeValue->attribute->slug;
            $attributesData[$attributeSlug] = [
                'value' => $attributeValue->attributeValue,
                'option' => $attributeValue->attributeOption ? $attributeValue->attributeOption->id : null,
            ];
        }


        // Return the edit view with all the necessary data
        return view('edit-annonce', compact('annonce', 'attributesData'));
    }

    public function update(Request $request, int $annonceId)
    {
    }

    public function uploadImage($annonceId, Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'userId' => 'required|integer|exists:users,id', // Validate userId
            'file' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Validate the file
            'alt' => 'nullable|string|max:255', // Validate alt text (optional)
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Retrieve the validated userId and alt text
        $userId = $request->input('userId');
        // Generate default alt text if not provided
        $defaultAlt = env('APP_NAME') . '-' . Str::random(10) . '-' . $userId;
        $alt = $request->input('alt', $defaultAlt); // Use defaultAlt if alt is not provided

        // Ensure that the annonce exists and belongs to the provided userId
        $annonce = Annonce::where('id', $annonceId)->where('user_id', $userId)->first();

        if (!$annonce) {
            return response()->json(['error' => 'Annonce not found or unauthorized'], 404);
        }

        // Retrieve the uploaded file
        $file = $request->file('file');

        if (!$file) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        // Generate a UUID for the file
        $uuid = (string) Str::uuid(); // Generate a UUID and convert to string
        $filename = "{$annonceId}-{$uuid}-{$userId}.{$file->getClientOriginalExtension()}";

        // Store the file with the new name
        $path = $file->storeAs('images', $filename, 'public'); // Adjust path and disk as needed

        // Create a new Image record
        $image = Image::create([
            'annonce_id' => $annonceId,
            'blog_id' => null, // Set blog_id to null
            'path' => $path,
            'feature_img' => false, // Set feature_img to false
            'alt' => $alt, // Store the alt text
        ]);

        // Respond with some information about the file and the created image record
        return response()->json([
            'annonceId' => $annonceId,
            'filePath' => $path,
            'alt' => $alt,
            'fileName' => $filename,
            'imageId' => $image->id, // Include the ID of the newly created image record
        ]);
    }

    public function setThumbnail($annonceId, $imageId, Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'userId' => 'required|integer|exists:users,id', // Validate userId
            'feature_img' => 'required|boolean', // Validate feature_img
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Validate that the annonce belongs to the authenticated user
        $userId = $request->input('userId');
        $annonce = Annonce::where('id', $annonceId)->where('user_id', $userId)->first();

        if (!$annonce) {
            return response()->json(['error' => 'Annonce not found or unauthorized'], 404);
        }

        // Set the feature_img value from the request
        $featureImgValue = $request->input('feature_img');

        if ($featureImgValue) {
            // Reset all images for this annonce to not be featured
            Image::where('annonce_id', $annonceId)->update(['feature_img' => false]);
        }

        // Set the selected image's feature_img to the provided value
        $image = Image::where('id', $imageId)->where('annonce_id', $annonceId)->first();

        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        $image->feature_img = $featureImgValue;
        $image->save();

        return response()->json(['success' => 'Thumbnail set successfully']);
    }

    public function deleteImage($annonceId, $imageId, Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'userId' => 'required|integer|exists:users,id', // Validate userId
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Retrieve the userId from the request
        $userId = $request->input('userId');

        // Ensure that the annonce exists and belongs to the provided userId
        $annonce = Annonce::where('id', $annonceId)->where('user_id', $userId)->first();

        if (!$annonce) {
            return response()->json(['error' => 'Annonce not found or unauthorized'], 404);
        }

        // Find the image record
        $image = Image::where('id', $imageId)->where('annonce_id', $annonceId)->first();

        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        // Delete the file from storage
        Storage::disk('public')->delete($image->path);

        // Delete the image record from the database
        $image->delete();

        return response()->json(['success' => 'Image deleted successfully']);
    }

    public function validateAnnonce(int $annonceId)
    {
        // Fetch the annonce
        $annonce = Annonce::where('id', $annonceId)->where('user_id', Auth::id())->first();

        if (!$annonce) {
            return abort(404, 'Annonce not found or you do not have permission to access it.');
        }

        // Fetch images for the annonce
        $images = Image::where('annonce_id', $annonce->id)->get();

        // Convert images to the format used by Dropzone
        $existingPhotos = $images->map(function ($image) {
            return [
                'id' => $image->id,
                'url' => asset('storage/' . $image->path), // Assuming images are stored in the public disk
                'isMain' => $image->feature_img,
            ];
        });

        // Pass images to the view
        return view('annonce-images', compact('annonce', 'existingPhotos'));
    }

    public function checkPhotos(int $annonceId)
    {
        // Fetch the annonce
        $annonce = Annonce::where('id', $annonceId)->where('user_id', Auth::id())->first();

        if (!$annonce) {
            return abort(404, 'Annonce not found or you do not have permission to access it.');
        }

        $images = Image::where('annonce_id', $annonce->id)->get();

        if (count($images) > 1) {
            return redirect()->route('home')->with('success', 'Annonce enregistrée et publiée avec succès.');
        } else {
            return redirect()
                ->back()
                ->withErrors(['error' => 'Vous devez télécharger plus d\'une photo pour publier l\'annonce.']);
        }
    }
}
