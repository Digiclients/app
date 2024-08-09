<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;


    protected $fillable = [
        'option',
        'value',
        'type'
    ];

    // NEED TO ADD THE PERCENTAGE OF AVERAGE (PRO = 10% 1 PRIVATE = 100%)
    // NEED TO ADD STATUS OF ANNONCE IN THIS TABLE
}
