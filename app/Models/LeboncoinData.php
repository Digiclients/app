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
