<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'slug',
        'parent_category_id',
        'main_category'
    ];

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_category_id');
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }
}
