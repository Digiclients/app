<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceAttributesValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonce_id',
        'attribute_id',
        'attributeOption_id',
        'attributeValue'
    ];

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function attributeOption()
    {
        return $this->belongsTo(AttributesOption::class);
    }
}
