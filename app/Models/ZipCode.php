<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'zip_code',
        'description'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function localizations()
    {
        return $this->hasMany(Localization::class);
    }
}
