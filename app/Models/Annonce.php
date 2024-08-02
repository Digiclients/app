<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'boutique_id',
        'category_id',
        'localization_id',
        'title',
        'description',
        'price',
        'email', /// the email should be unique differnce users not annonces
        'phone',
        'publication_date',
        'status' //Draft Active Inactive Pending Approved Rejected Expired Archived Deleted
    ];

    public const ACTIVE = "active";
    public const INACTIVE = "inactive";
    public const PENDING = "pending";
    public const APPROVED = "approved";
    public const REJECTED = "rejected";
    public const EXPIRED = "expired";
    public const AECHIVED = "archived";
    public const DELETED = "deleted";


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function localization()
    {
        return $this->belongsTo(Localization::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function attributesValue()
    {
        return $this->hasMany(AnnonceAttributesValue::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
