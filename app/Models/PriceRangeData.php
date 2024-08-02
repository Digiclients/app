<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceRangeData extends Model
{
    use HasFactory;
    protected $fillable = [
        'model-slug',
        'min-price',
        'max-price',
    ];
}
