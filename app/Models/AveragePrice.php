<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AveragePrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'marque',
        'modele',
        'annee_modele_min',
        'annee_modele_max',
        'carburant',
        'boite_vitesse',
        'kilometrage_min',
        'kilometrage_max',
        'average_price',
        'min_price',
        'max_price',
    ];
}
