<?php

namespace App\Repositories;

use App\Models\Image;
use App\Models\Option;
use App\Models\Annonce;
use App\Models\Category;
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

    public function filterAnnonces(array $filters, $perPage = 20)
    {
        // $query = Annonce::with([
        //     'localization',
        //     'user',
        //     'images' => function ($query) {
        //         $query->where('feature_img', 1);
        //     },
        // ])->where('status', Annonce::ACTIVE);
        $query = Annonce::with([
            'localization', // Location data
            'user', // User data
            'images' => function ($query) {
                $query->where('feature_img', 1); // Only feature images
            },
            'attributesValue.attribute', // Load attributes through attributesValue
            'category', // category data
        ])->where('status', Annonce::ACTIVE);

        // dd($query->get());
        $this->applyLocationFilter($query, $filters);
        $this->applyTitleFilter($query, $filters);
        $this->applyPriceFilter($query, $filters);
        $this->applyMarqueFilter($query, $filters);
        $this->applyModeleFilter($query, $filters);
        $this->applyAnneeModeleFilter($query, $filters);
        $this->applyTypeDeVehiculeFilter($query, $filters);
        $this->applyCarburantFilter($query, $filters);
        $this->applyBoiteVitesseFilter($query, $filters);
        $this->applyKilometrageFilter($query, $filters);
        $this->applyCritAirFilter($query, $filters);
        // $this->applyPuissanceDinFilter($query, $filters);
        $this->applyEtatDuVehiculeFilter($query, $filters);
        // $this->applyPuissanceFiscaleFilter($query, $filters);
        $this->applyNombrePortesFilter($query, $filters);
        // $this->applyNombrePlaceFilter($query, $filters);
        $this->applyCouleurFilter($query, $filters);
        $this->applyPermisFilter($query, $filters);
        $this->applytypeVendeurs($query, $filters);

        return $query->paginate($perPage);
    }

    private function applyLocationFilter($query, $filters)
    {
        // if (!empty($filters['location'])) {
        //     $location = $filters['location'];
        //     $query->whereHas('localization', function ($q) use ($location) {
        //         $q->where('id', $location);
        //     });
        // }
        if (!empty($filters['location'])) {
            $location = $filters['location'];
            $query->whereHas('localization', function ($q) use ($location) {
                $q->where('localization', $location); // Match the localization string
            });
        }
    }

    private function applyTitleFilter($query, $filters)
    {
        if (!empty($filters['title'])) {
            $title = $filters['title'];
            $query->where('title', 'like', '%' . $title . '%');
        }
    }

    private function applyPriceFilter($query, $filters)
    {
        if (!empty($filters['prixMin']) && !empty($filters['prixMax'])) {
            $query->whereBetween('price', [$filters['prixMin'], $filters['prixMax']]);
        } elseif (!empty($filters['prixMin'])) {
            $query->where('price', '>=', $filters['prixMin']);
        } elseif (!empty($filters['prixMax'])) {
            $query->where('price', '<=', $filters['prixMax']);
        }
    }

    private function applyMarqueFilter($query, $filters)
    {
        if (!empty($filters['marque'])) {
            // Find the marque category by slug or name
            $marqueCategory = Category::where('category_name', $filters['marque'])->first();

            if ($marqueCategory) {
                // Get all categories with parent_category_id = $marqueCategory->id
                $categoryIds = Category::where('parent_category_id', $marqueCategory->id)
                    ->pluck('id')
                    ->toArray();

                // Apply the filter using whereHas to filter by category relationship
                $query->whereHas('category', function ($q) use ($categoryIds) {
                    $q->whereIn('id', $categoryIds);
                });
            }
        }
    }

    private function applyModeleFilter($query, $filters)
    {
        if (!empty($filters['modele']) && is_array($filters['modele'])) {
            $modelNames = $filters['modele'];

            // Get all category IDs that match the model names
            $categoryIds = Category::whereIn('category_name', $modelNames)->pluck('id')->toArray();

            // Apply the filter using whereHas to filter by category relationship
            $query->whereHas('category', function ($q) use ($categoryIds) {
                $q->whereIn('id', $categoryIds);
            });
        }
    }

    private function applyAnneeModeleFilter($query, $filters)
    {
        if (!empty($filters['anneeModeleMin']) || !empty($filters['anneeModeleMax'])) {
            // Find the 'annee_modele' attribute
            $anneeModeleAttribute = Attribute::where('slug', 'annee_modele')->first();

            if ($anneeModeleAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($anneeModeleAttribute, $filters) {
                    if (!empty($filters['anneeModeleMin']) && !empty($filters['anneeModeleMax'])) {
                        $q->where('attribute_id', $anneeModeleAttribute->id)->whereBetween('attributeValue', [$filters['anneeModeleMin'], $filters['anneeModeleMax']]);
                    } elseif (!empty($filters['anneeModeleMin'])) {
                        $q->where('attribute_id', $anneeModeleAttribute->id)->where('attributeValue', '>=', $filters['anneeModeleMin']);
                    } elseif (!empty($filters['anneeModeleMax'])) {
                        $q->where('attribute_id', $anneeModeleAttribute->id)->where('attributeValue', '<=', $filters['anneeModeleMax']);
                    }
                });
            }
        }
    }

    private function applyTypeDeVehiculeFilter($query, $filters)
    {
        if (!empty($filters['type_de_vehicule']) && is_array($filters['type_de_vehicule'])) {
            // Find the 'type_de_vehicule' attribute
            $typeDeVehiculeAttribute = Attribute::where('slug', 'type_vehicule')->first();

            if ($typeDeVehiculeAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($typeDeVehiculeAttribute, $filters) {
                    $q->where('attribute_id', $typeDeVehiculeAttribute->id)->whereIn('attributeValue', $filters['type_de_vehicule']);
                });
            }
        }
    }

    private function applyCarburantFilter($query, $filters)
    {
        if (!empty($filters['carburant']) && is_array($filters['carburant'])) {
            // Find the 'carburant' attribute
            $carburantAttribute = Attribute::where('slug', 'carburant')->first();

            if ($carburantAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($carburantAttribute, $filters) {
                    $q->where('attribute_id', $carburantAttribute->id)->whereIn('attributeValue', $filters['carburant']);
                });
            }
        }
    }

    private function applyBoiteVitesseFilter($query, $filters)
    {
        if (!empty($filters['boite_vitesse']) && is_array($filters['boite_vitesse'])) {
            // Find the 'boite_vitesse' attribute
            $boite_vitesseAttribute = Attribute::where('slug', 'boite_vitesse')->first();

            if ($boite_vitesseAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($boite_vitesseAttribute, $filters) {
                    $q->where('attribute_id', $boite_vitesseAttribute->id)->whereIn('attributeValue', $filters['boite_vitesse']);
                });
            }
        }
    }

    private function applyKilometrageFilter($query, $filters)
    {
        if (!empty($filters['kilometrageMin']) || !empty($filters['kilometrageMax'])) {
            // Find the 'kilometrage' attribute
            $kilometrageAttribute = Attribute::where('slug', 'kilometrage')->first();

            if ($kilometrageAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($kilometrageAttribute, $filters) {
                    if (!empty($filters['kilometrageMin']) && !empty($filters['kilometrageMax'])) {
                        $q->where('attribute_id', $kilometrageAttribute->id)->whereBetween('attributeValue', [$filters['kilometrageMin'], $filters['kilometrageMax']]);
                    } elseif (!empty($filters['kilometrageMin'])) {
                        $q->where('attribute_id', $kilometrageAttribute->id)->where('attributeValue', '>=', $filters['kilometrageMin']);
                    } elseif (!empty($filters['kilometrageMax'])) {
                        $q->where('attribute_id', $kilometrageAttribute->id)->where('attributeValue', '<=', $filters['kilometrageMax']);
                    }
                });
            }
        }
    }

    private function applyCritAirFilter($query, $filters)
    {
        if (!empty($filters['crit_air']) && is_array($filters['crit_air'])) {
            // Find the 'crit_air' attribute
            $crit_airAttribute = Attribute::where('slug', 'crit_air')->first();

            if ($crit_airAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($crit_airAttribute, $filters) {
                    $q->where('attribute_id', $crit_airAttribute->id)->whereIn('attributeValue', $filters['crit_air']);
                });
            }
        }
    }

    private function applyPuissanceDinFilter($query, $filters)
    {
        if (!empty($filters['puissanceDinMin']) || !empty($filters['puissanceDinMax'])) {
            // Find the 'puissance_DIN' attribute
            $puissance_DINAttribute = Attribute::where('slug', 'puissance_DIN')->first();
            // Build a query to filter based on attributesValue
            $query->whereHas('attributesValue', function ($q) use ($puissance_DINAttribute, $filters) {
                if (!empty($filters['puissanceDinMin']) && !empty($filters['puissanceDinMax'])) {
                    $q->where('attribute_id', $puissance_DINAttribute->id)->whereBetween('attributeValue', [$filters['puissanceDinMin'], $filters['puissanceDinMax']]);
                } elseif (!empty($filters['puissanceDinMin'])) {
                    $q->where('attribute_id', $puissance_DINAttribute->id)->where('attributeValue', '>=', $filters['puissanceDinMin']);
                } elseif (!empty($filters['puissanceDinMax'])) {
                    $q->where('attribute_id', $puissance_DINAttribute->id)->where('attributeValue', '<=', $filters['puissanceDinMax']);
                }
            });
        }
    }

    private function applyEtatDuVehiculeFilter($query, $filters)
    {
        if (!empty($filters['etat_du_vehicule']) && is_array($filters['etat_du_vehicule'])) {
            // Find the 'etat_du_vehicule' attribute
            $etat_vehiculeAttribute = Attribute::where('slug', 'etat_du_vehicule')->first();

            if ($etat_vehiculeAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($etat_vehiculeAttribute, $filters) {
                    $q->where('attribute_id', $etat_vehiculeAttribute->id)->whereIn('attributeValue', $filters['etat_du_vehicule']);
                });
            }
        }
    }

    private function applyPuissanceFiscaleFilter($query, $filters)
    {
        if (!empty($filters['puissanceFiscaleMin']) || !empty($filters['puissanceFiscaleMax'])) {
            // Find the 'PuissanceFiscale' attribute
            $PuissanceFiscaleAttribute = Attribute::where('slug', 'puissance_fiscale')->first();
            // Build a query to filter based on attributesValue
            $query->whereHas('attributesValue', function ($q) use ($PuissanceFiscaleAttribute, $filters) {
                if (!empty($filters['puissanceFiscaleMin']) && !empty($filters['puissanceFiscaleMax'])) {
                    $q->where('attribute_id', $PuissanceFiscaleAttribute->id)->whereBetween('attributeValue', [$filters['puissanceFiscaleMin'], $filters['puissanceFiscaleMax']]);
                } elseif (!empty($filters['puissanceFiscaleMin'])) {
                    $q->where('attribute_id', $PuissanceFiscaleAttribute->id)->where('attributeValue', '>=', $filters['puissanceFiscaleMin']);
                } elseif (!empty($filters['puissanceFiscaleMax'])) {
                    $q->where('attribute_id', $PuissanceFiscaleAttribute->id)->where('attributeValue', '<=', $filters['puissanceFiscaleMax']);
                }
            });
        }
    }

    private function applyNombrePortesFilter($query, $filters)
    {
        if (!empty($filters['nombre_de_portes']) && is_array($filters['nombre_de_portes'])) {
            // Find the 'nombre_de_portes' attribute
            $nombre_porteAttribute = Attribute::where('slug', 'nombre_porte')->first();

            if ($nombre_porteAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($nombre_porteAttribute, $filters) {
                    $q->where('attribute_id', $nombre_porteAttribute->id)->whereIn('attributeValue', $filters['nombre_de_portes']);
                });
            }
        }
    }

    private function applyNombrePlaceFilter($query, $filters)
    {
        if (!empty($filters['nombre_de_place']) && is_array($filters['nombre_de_place'])) {
            // Find the 'nombre_de_place' attribute
            $NombrePlaceAttribute = Attribute::where('slug', 'nombre_place')->first();

            if ($NombrePlaceAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($NombrePlaceAttribute, $filters) {
                    $q->where('attribute_id', $NombrePlaceAttribute->id)->whereIn('attributeValue', $filters['nombre_de_place']);
                });
            }
        }
    }

    private function applyCouleurFilter($query, $filters)
    {
        if (!empty($filters['couleur']) && is_array($filters['couleur'])) {
            // Find the 'couleur' attribute
            $CouleurAttribute = Attribute::where('slug', 'couleur')->first();

            if ($CouleurAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($CouleurAttribute, $filters) {
                    $q->where('attribute_id', $CouleurAttribute->id)->whereIn('attributeValue', $filters['couleur']);
                });
            }
        }
    }

    private function applyPermisFilter($query, $filters)
    {
        if (!empty($filters['permis']) && is_array($filters['permis'])) {
            // Find the 'Permis' attribute
            $PermisAttribute = Attribute::where('slug', 'permis')->first();

            if ($PermisAttribute) {
                // Build a query to filter based on attributesValue
                $query->whereHas('attributesValue', function ($q) use ($PermisAttribute, $filters) {
                    $q->where('attribute_id', $PermisAttribute->id)->whereIn('attributeValue', $filters['permis']);
                });
            }
        }
    }
    private function applytypeVendeurs($query, $filters)
    {
        if (!empty($filters['typeVendeurs']) && is_array($filters['typeVendeurs'])) {
            $sellerTypes = $filters['typeVendeurs'];
            $query->whereHas('user', function ($q) use ($sellerTypes) {
                $q->whereIn('id', $sellerTypes);

            });
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

    public function getCategoryDetails($annonce)
    {
        // Find the category by ID
        $category = Category::find($annonce->category_id);

        if (!$category) {
            return abort(404, 'Category not found');
        }

        // Fetch the category name
        $categoryName = $category->category_name;

        // Fetch the first parent category where main_category = 1
        $parentCategory = $this->findParentCategory($category->parent_category_id);

        // Get the parent category name
        $parentCategoryName = $parentCategory ? $parentCategory->category_name : null;

        return [
            'category_name' => $categoryName,
            'parent_category_id' => $parentCategory ? $parentCategory->id : null,
            'parent_category_name' => $parentCategoryName,
        ];
    }

    private function findParentCategory($parentCategoryId)
    {
        while ($parentCategoryId) {
            $parentCategory = Category::find($parentCategoryId);

            if (!$parentCategory) {
                return null;
            }

            if ($parentCategory->main_category == 1) {
                return $parentCategory;
            }

            // Move to the next parent in the hierarchy
            $parentCategoryId = $parentCategory->parent_category_id;
        }

        return null;
    }
}
