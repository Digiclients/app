<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'localization_id',
        'name',
        'description',
        'slug',
        'website',
        'street_address',
        'converment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function localization()
    {
        return $this->belongsTo(Localization::class);
    }
}
