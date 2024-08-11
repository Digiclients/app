<?php

namespace App\Repositories;

use App\Models\Image;
use App\Models\Option;
use App\Models\Annonce;
use App\Models\Attribute;
use App\Models\AttributesOption;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;
use App\Models\AnnonceAttributesValue;

class AnnonceRepository extends BaseRepository
{
    /**
     * Les champs de recherche disponibles .
     *
     * @var array
     */
    protected $fieldsSearchable = ['title', 'description', 'price', 'publication_date'];

    /**
     * Renvoie les champs de recherche disponibles.
     *
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldsSearchable;
    }

    /**
     * Constructeur de la classe ProjetRepository.
     */
    public function __construct()
    {
        parent::__construct(new Annonce());
    }

    /**
     * Create a new annonce with related attributes and images.
     *
     * @param array $annonceData
     * @param array $attributesData
     * @return Annonce
     */
    public function createAnnonce(array $annonceData, array $attributesData): Annonce
    {
        DB::beginTransaction();

        try {
            // Create the annonce
            $annonce = parent::create($annonceData);

            // Insert attributes values
            foreach ($attributesData as $attributeData) {
                $attribute = Attribute::where('slug', $attributeData['slug'])->first();
                if ($attribute) {
                    // $option = AttributesOption::where('attribute_id', $attribute->id)
                    // ->where('optionValue', $attributeData['attributeValue'])
                    // ->first();
                    $option = AttributesOption::where('id', $attributeData['attributeOption_id'])->first();

                    AnnonceAttributesValue::create([
                        'annonce_id' => $annonce->id,
                        'attribute_id' => $attribute->id,
                        'attributeOption_id' => $attributeData['attributeOption_id'] ? $attributeData['attributeOption_id'] : null,
                        'attributeValue' => $option ? $option->optionValue : $attribute->slug . ' value',
                    ]);
                }
            }

            // dd($annonceAttributesValues);

            DB::commit();

            return $annonce;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
    /**
     * Crée un nouvel élément.
     *
     * @param array $data Données de l'élément à créer.
     * @return mixed
     */
    public function create(array $data)
    {
        $statusOption = Option::select('value')
            ->where('option', Option::STATUSOPTION)
            ->first();
        // Ensure that the status is set to "pending" if it is not already set
        if ($statusOption) {
            // Ensure that the status is set to "pending" if it is not already set
            $data['status'] = $data['status'] ?? $statusOption->value;
        } else {
            // Handle the case where $statusOption does not exist (optional)
            $data['status'] = $data['status'] ?? 'pending';
        }
        // Set the publication_date to the current date and time if it is not already set
        $data['publication_date'] = $data['publication_date'] ?? now()->format('Y-m-d H:i:s');

        // Optionally, you can use dd($data) here to debug the data before saving
        // dd($data);

        // Call the parent create method with the modified data
        return parent::create($data);
    }

    public function UpdateStatus($data, $status)
    {
        // if (isset($data)) {
        //     $data["status"] = $status;
        // }
        // parent::create($data);
    }

    public function AnnoncesListings(int $perpage = 10)
    {
        // First, get the paginated raw results
        $paginator = DB::table('annonces as a')
            ->join('annonce_attributes_values as atv', 'a.id', '=', 'atv.annonce_id')
            ->join('attributes as att', 'atv.attribute_id', '=', 'att.id')
            ->join('localizations as l', 'a.localization_id', '=', 'l.id')
            ->join('users as u', 'a.user_id', '=', 'u.id') // Join with the users table to get sellerType
            ->leftJoin('images as i', function ($join) {
                $join->on('a.id', '=', 'i.annonce_id')->where('i.feature_img', '=', 1);
            })
            ->whereIn('att.slug', ['annee_modele', 'kilometrage', 'carburant', 'boite_vitesse'])
            ->where('a.status', '=', Annonce::ACTIVE) // Filter by status
            ->select(
                'a.id as annonce_id',
                'a.user_id',
                'a.boutique_id',
                'a.category_id',
                'a.localization_id',
                'l.localization',
                'a.title as annonce_title',
                'a.price as annonce_price',
                'a.publication_date as annonce_publication_date',
                'u.sellerType as seller_type', // Select sellerType from the users table
                'att.id as attribute_id',
                'att.name as attribute_name',
                'att.type as attribute_type',
                'atv.attributeValue as attribute_value',
                'i.path as feature_img_path',
                'i.alt as feature_img_alt',
            )
            ->orderBy('a.publication_date', 'desc') // Order by publication date
            ->paginate($perpage);

        // Get the items from the paginator
        $rawResults = collect($paginator->items());

        // Group and transform the raw results
        $transformedResults = $rawResults->groupBy('annonce_id')->map(function ($items) {
            $firstItem = $items->first(); // Get the first item to extract common fields

            return (object) [
                'annonce_id' => $firstItem->annonce_id,
                'user_id' => $firstItem->user_id,
                'boutique_id' => $firstItem->boutique_id,
                'category_id' => $firstItem->category_id,
                'localization_id' => $firstItem->localization_id,
                'localization' => $firstItem->localization,
                'annonce_title' => $firstItem->annonce_title,
                'annonce_price' => $firstItem->annonce_price,
                'annonce_publication_date' => $firstItem->annonce_publication_date,
                'seller_type' => $firstItem->seller_type, // Include sellerType
                'attributes' => $items->map(function ($item) {
                    return (object) [
                        'attribute_id' => $item->attribute_id,
                        'attribute_name' => $item->attribute_name,
                        'attribute_type' => $item->attribute_type,
                        'attribute_value' => $item->attribute_value,
                    ];
                }),
                'feature_img_path' => $firstItem->feature_img_path, // Include the featured image path
                'feature_img_alt' => $firstItem->feature_img_alt, // Include the featured image alt text
            ];
        });

        // Replace the items in the paginator with the transformed results
        $paginator->setCollection($transformedResults);

        return $paginator;
    }

    public function getAnnonceDetails($annonceId)
    {
        $rawResults = DB::table('annonces as a')
            ->join('annonce_attributes_values as atv', 'a.id', '=', 'atv.annonce_id')
            ->join('attributes as att', 'atv.attribute_id', '=', 'att.id')
            ->join('localizations as l', 'a.localization_id', '=', 'l.id')
            ->join('categories as c', 'a.category_id', '=', 'c.id') // Join with categories table
            ->leftJoin('categories as pc', 'c.parent_category_id', '=', 'pc.id') // Self-join to get parent category name
            ->leftJoin('images as i', 'a.id', '=', 'i.annonce_id')
            ->where('a.id', $annonceId)
            ->select(
                'a.id as annonce_id',
                'a.user_id',
                'a.boutique_id',
                'a.category_id',
                'c.category_name as category_name', // Get category name
                'pc.category_name as parent_category_name', // Get parent category name
                'a.localization_id',
                'l.localization',
                'a.title as annonce_title',
                'a.description as annonce_description',
                'a.email as annonce_email',
                'a.phone as annonce_phone',
                'a.price as annonce_price',
                'a.publication_date as annonce_publication_date',
                'att.id as attribute_id',
                'att.name as attribute_name',
                'att.slug AS attribute_slug',
                'atv.attributeValue as attribute_value',
                'i.path as image_path',
                'i.alt as image_alt',
                'i.feature_img as image_feature',
            )
            ->get();

        $groupedResults = $rawResults->groupBy('annonce_id')->map(function ($items) {
            $firstItem = $items->first();

            $attributes = collect();
            $images = collect();

            foreach ($items as $item) {
                $attributes->push(
                    (object) [
                        'attribute_id' => $item->attribute_id,
                        'attribute_name' => $item->attribute_name,
                        'attribute_slug' => $item->attribute_slug,
                        'attribute_value' => $item->attribute_value,
                    ],
                );

                if ($item->image_path) {
                    $images->push(
                        (object) [
                            'path' => $item->image_path,
                            'alt' => $item->image_alt,
                            'feature_img' => $item->image_feature,
                        ],
                    );
                }
            }

            return (object) [
                'annonce_id' => $firstItem->annonce_id,
                'user_id' => $firstItem->user_id,
                'boutique_id' => $firstItem->boutique_id,
                'category_id' => $firstItem->category_id,
                'category_name' => $firstItem->category_name, // Add category name
                'parent_category_name' => $firstItem->parent_category_name, // Add parent category name
                'localization_id' => $firstItem->localization_id,
                'localization' => $firstItem->localization,
                'annonce_title' => $firstItem->annonce_title,
                'annonce_description' => $firstItem->annonce_description,
                'annonce_email' => $firstItem->annonce_email,
                'annonce_phone' => $firstItem->annonce_phone,
                'annonce_price' => $firstItem->annonce_price,
                'annonce_publication_date' => $firstItem->annonce_publication_date,
                'attributes' => $attributes->unique('attribute_id'),
                'images' => $images->unique('path'),
            ];
        });

        return $groupedResults->first();
    }


    // public function UserAnnonces($user_id, int $perpage = 10)
    // {
    //     $annonces = $this->model->with([
    //         'localization',
    //         'images' => function ($query) {
    //             $query->where('feature_img', 1);
    //         }
    //     ])->where('user_id', $user_id)->paginate($perpage);
    //     return $annonces;
    // }
    // public function UserAnnonces($user_id, int $perpage = 10)
    // {
    //     $paginator = DB::table('annonces as a')
    //         ->join('annonce_attributes_values as atv', 'a.id', '=', 'atv.annonce_id')
    //         ->join('attributes as att', 'atv.attribute_id', '=', 'att.id')
    //         ->join('localizations as l', 'a.localization_id', '=', 'l.id')
    //         ->join('users as u', 'a.user_id', '=', 'u.id') // Join with the users table to get sellerType
    //         ->leftJoin('images as i', function ($join) {
    //             $join->on('a.id', '=', 'i.annonce_id')->where('i.feature_img', '=', 1);
    //         })
    //         ->whereIn('att.slug', ['annee_modele', 'kilometrage', 'carburant', 'boite_vitesse'])
    //         ->where('a.status', '=', Annonce::ACTIVE) // Filter by status
    //         ->where('a.user_id', '=', $user_id) // Filter by user_id
    //         ->select(
    //             'a.id as annonce_id',
    //             'a.user_id',
    //             'a.boutique_id',
    //             'a.category_id',
    //             'a.localization_id',
    //             'l.localization',
    //             'a.title as annonce_title',
    //             'a.price as annonce_price',
    //             'a.publication_date as annonce_publication_date',
    //             'u.sellerType as seller_type', // Select sellerType from the users table
    //             'att.id as attribute_id',
    //             'att.name as attribute_name',
    //             'att.type as attribute_type',
    //             'atv.attributeValue as attribute_value',
    //             'i.path as feature_img_path',
    //             'i.alt as feature_img_alt'
    //         )
    //         ->orderBy('a.publication_date', 'desc') // Order by publication date
    //         ->paginate($perpage);

    //     // Get the items from the paginator
    //     $rawResults = collect($paginator->items());

    //     // Group and transform the raw results
    //     $transformedResults = $rawResults->groupBy('annonce_id')->map(function ($items) {
    //         $firstItem = $items->first(); // Get the first item to extract common fields

    //         return (object) [
    //             'annonce_id' => $firstItem->annonce_id,
    //             'user_id' => $firstItem->user_id,
    //             'boutique_id' => $firstItem->boutique_id,
    //             'category_id' => $firstItem->category_id,
    //             'localization_id' => $firstItem->localization_id,
    //             'localization' => $firstItem->localization,
    //             'annonce_title' => $firstItem->annonce_title,
    //             'annonce_price' => $firstItem->annonce_price,
    //             'annonce_publication_date' => $firstItem->annonce_publication_date,
    //             'seller_type' => $firstItem->seller_type, // Include sellerType
    //             'attributes' => $items->map(function ($item) {
    //                 return (object) [
    //                     'attribute_id' => $item->attribute_id,
    //                     'attribute_name' => $item->attribute_name,
    //                     'attribute_type' => $item->attribute_type,
    //                     'attribute_value' => $item->attribute_value,
    //                 ];
    //             }),
    //             'feature_img_path' => $firstItem->feature_img_path, // Include the featured image path
    //             'feature_img_alt' => $firstItem->feature_img_alt, // Include the featured image alt text
    //         ];
    //     });

    //     // Replace the items in the paginator with the transformed results
    //     $paginator->setCollection($transformedResults);

    //     return $paginator;
    // }

}
