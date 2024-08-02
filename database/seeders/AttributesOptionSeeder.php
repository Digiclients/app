<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;
use App\Models\AttributesOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributesOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all attributes
        $attributes = Attribute::all();

        // Define options for each attribute type
        $options = [
            'carburant' => ['Essence', 'Diesel', 'Hybride', 'Electrique', 'GPL', 'Gaz naturel (CNG)', 'Autre'],
            'boite_vitesse' => ['Manuelle', 'Automatique'],
            'type_vehicule' => ['4x4, Suv', 'Berline', 'Break', 'Cabriolet', 'Citadine', 'Coupé', 'Monospace', 'Voiture société, commerciale', 'Autre'],
            'nombre_place' => [2, 3, 4, 5, 6, '6+'],
            'nombre_porte' => [2, 3, 4, 5, 6, '6+'],
            'permis' => ['Avec permis', 'Sans permis'],
            'couleur' => ['Argent', 'Beige', 'Blanc', 'Bleu', 'Bordeaux', 'Doré', 'Gris', 'Ivoire', 'Jaune', 'Marron', 'Noir', 'Orange', 'Rose', 'Rouge', 'Vert', 'Violet', 'Autre'],
            'etat_du_vehicule' => ['Non endommagé', 'Endommagé'],
            'crit_air' => [0, 1, 2, 3, 4, 5, 'Autre'],
        ];

        foreach ($attributes as $attribute) {
            // Check if the attribute name exists in the options array
            if (array_key_exists($attribute->slug, $options)) {
                // Get the options for this attribute
                $attributeOptions = $options[$attribute->slug];
                foreach ($attributeOptions as $optionValue) {
                    AttributesOption::create([
                        'attribute_id' => $attribute->id,
                        'optionValue' => $optionValue
                    ]);
                }
            }
        }
    }
}
