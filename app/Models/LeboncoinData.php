<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeboncoinData extends Model
{
    use HasFactory, Searchable;

    protected $table = 'leboncoin_data';


    protected $fillable = [
        'list_id',
        'subject',
        'city',
        'zipcode',
        'price',
        'u_car_brand',
        'u_car_model',
        'model-slug',
        'regdate',
        'vehicle_type',
        'fuel',
        'gearbox',
        'mileage',
        'horse_power_din',
        'vehicle_damage',
        'horsepower',
        'doors',
        'seats',
        'vehicule_color',
        'vehicle_vsp',
        'ownerType',
        'url',
        'ownerName',
    ];

    protected $regions = [
        "Île-de-France" => [
            "Paris",
            "Boulogne-Billancourt",
            "Argenteuil",
            "Montreuil",
            "Versailles"
        ],
        "Provence-Alpes-Côte d'Azur" => [
            "Marseille",
            "Nice",
            "Toulon",
            "Aix-en-Provence",
            "Avignon"
        ],
        "Auvergne-Rhône-Alpes" => [
            "Lyon",
            "Saint-Étienne",
            "Grenoble",
            "Clermont-Ferrand",
            "Villeurbanne"
        ],
        "Hauts-de-France" => [
            "Lille",
            "Amiens",
            "Roubaix",
            "Tourcoing",
            "Dunkirk"
        ],
        "Nouvelle-Aquitaine" => [
            "Bordeaux",
            "Limoges",
            "Poitiers",
            "Pau",
            "La Rochelle"
        ],
        "Occitanie" => [
            "Toulouse",
            "Montpellier",
            "Nîmes",
            "Perpignan",
            "Béziers"
        ],
        "Grand Est" => [
            "Strasbourg",
            "Reims",
            "Metz",
            "Mulhouse",
            "Nancy"
        ],
        "Brittany" => [
            "Rennes",
            "Brest",
            "Quimper",
            "Lorient",
            "Vannes"
        ],
        "Normandy" => [
            "Rouen",
            "Caen",
            "Le Havre",
            "Cherbourg",
            "Évreux"
        ],
        "Pays de la Loire" => [
            "Nantes",
            "Angers",
            "Le Mans",
            "Saint-Nazaire",
            "La Roche-sur-Yon"
        ],
        "Centre-Val de Loire" => [
            "Orléans",
            "Tours",
            "Bourges",
            "Châteauroux",
            "Chartres"
        ],
        "Bourgogne-Franche-Comté" => [
            "Dijon",
            "Besançon",
            "Belfort",
            "Chalon-sur-Saône",
            "Auxerre"
        ],
        "Corsica" => [
            "Ajaccio",
            "Bastia",
            "Corte",
            "Porto-Vecchio",
            "Calvi"
        ]
    ];

    /**
     * Get the regions array.
     *
     * @return array
     */
    public function getRegions()
    {
        return $this->regions;
    }



    public function toSearchableArray()
    {
        return [
            'city' => $this->city,
            'price' => $this->price,
            'marque' => $this->u_car_brand,
            'modele' => $this->u_car_model,
            'annee-modele' => $this->regdate,
            // 'vehicle_type' => $this->vehicle_type,
            'carburant' => $this->fuel,
            'boite_vitesse' => $this->gearbox,
            'kilometrage' => $this->mileage,
            'puissance_din' => $this->horse_power_din,
            // 'vehicle_damage' => $this->vehicle_damage,
            'puissance_cv' => $this->horsepower,
            // 'doors' => $this->doors,
            // 'seats' => $this->seats,
            // 'vehicule_color' => $this->vehicule_color,
            // 'vehicle_vsp' => $this->vehicle_vsp,
            // 'ownerType' => $this->ownerType,
        ];
    }
}
