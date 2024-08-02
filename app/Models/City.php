<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'description'
    ];

    public function localizations()
    {
        return $this->hasMany(Localization::class);
    }

    public function zipCode()
    {
        return $this->hasMany(ZipCode::class);
    }
}
