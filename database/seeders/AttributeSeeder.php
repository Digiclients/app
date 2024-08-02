<?php

namespace Database\Seeders;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryId = Category::where('slug', 'voitures')->pluck('id')->first();

        // If there is no category_id, we can't proceed
        if (!$categoryId) {
            return;
        }

        // Create 5 attributes for the category
        $attributes = [
            [
                'category_id' => $categoryId,
                'name' => 'Matricule',
                'type' => 'string',
                'slug' => 'matricule',
                'the_order' => 1
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Année modèle',
                'type' => 'number',
                'slug' => 'annee_modele',
                'the_order' => 2
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Date de première mise en circulation',
                'type' => 'date',
                'slug' => 'date_premiere_mise_en_circulation',
                'the_order' => 3
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Carburant',
                'type' => 'select',
                'slug' => 'carburant',
                'the_order' => 4
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Boîte de vitesse',
                'type' => 'select',
                'slug' => 'boite_vitesse',
                'the_order' => 5
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Type de véhicule',
                'type' => 'select',
                'slug' => 'type_vehicule',
                'the_order' => 6
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Nombre de place(s)',
                'type' => 'select',
                'slug' => 'nombre_place',
                'the_order' => 7
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Puissance fiscale',
                'type' => 'number',
                'slug' => 'puissance_fiscale',
                'the_order' => 8
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Puissance DIN',
                'type' => 'numnber',
                'slug' => 'puissance_DIN',
                'the_order' => 9
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Permis',
                'type' => 'select',
                'slug' => 'permis',
                'the_order' => 10
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Kilométrage',
                'type' => 'number',
                'slug' => 'kilometrage',
                'the_order' => 11
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Couleur',
                'type' => 'select',
                'slug' => 'couleur',
                'the_order' => 12
            ],
            [
                'category_id' => $categoryId,
                'name' => "Crit'Air", // it is between 0 to 5 and it is nullable
                'type' => 'select',
                'slug' => "crit_air",
                'the_order' => 13
            ],
            [
                'category_id' => $categoryId,
                'name' => "Code Vin",
                'type' => 'string',
                'slug' => 'code_vin',
                'the_order' => 14
            ],
            // [
            //     'category_id' => $categoryId,
            //     'name' => 'Date de fin de validité du contrôle technique',
            //     'type' => 'string',
            //     'slug' => 'date_de_fin_de_validite_du_controle_technique',
            //     'the_order' => 5
            // ],
            [
                'category_id' => $categoryId,
                'name' => 'État du véhicule',
                'type' => 'select',
                'slug' => 'etat_du_vehicule',
                'the_order' => 15
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Nombre de porte(s)',
                'type' => 'select',
                'slug' => 'nombre_porte',
                'the_order' => 16
            ],
        ];

        foreach ($attributes as $attribute) {
            Attribute::create($attribute);
        }
    }
}
