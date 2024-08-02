<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    public const ADMIN = "admin";
    public const MANAGER = "manager";
    public const PARTICULIER = "particulier";
    public const PROFESSIONNEL = "professionnel";

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'sellerType',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function boutiques()
    {
        return $this->hasMany(Boutique::class);
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
