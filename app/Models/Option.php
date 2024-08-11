<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public const PROPERCENTAGE = "pro percentage";
    public const APPLYPROPERCENTAGE = "apply pro percentage";
    public const STATUSOPTION = "default status annonce";


    protected $fillable = [
        'option',
        'value',
        'type'
    ];


    // OPTIONS : pro percentage, apply pro percentage, default min price range, default max price range

    // NEED TO ADD THE PERCENTAGE OF AVERAGE (PRO = 10% 1 PRIVATE = 100%)
    // NEED TO ADD STATUS OF ANNONCE IN THIS TABLE
}
