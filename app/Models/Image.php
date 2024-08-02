<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonce_id',
        'blog_id',
        'alt',
        'path',
        'feature_img'
    ];

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
