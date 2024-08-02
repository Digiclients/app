<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'zip_code_id',
        'localization'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function zipCode()
    {
        return $this->belongsTo(ZipCode::class);
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function boutiques()
    {
        return $this->hasMany(Boutique::class);
    }
}
