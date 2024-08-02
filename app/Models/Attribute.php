<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'type',
        'slug',
        'the_order'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(AnnonceAttributesValue::class);
    }

    public function attributesOption()
    {
        return $this->hasMany(AttributesOption::class);
    }
}
