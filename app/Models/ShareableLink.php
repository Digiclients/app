<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShareableLink extends Model
{
    protected $fillable = [
        'unique_id',
        'filters',
        'date', // Add date to fillable attributes
    ];

    protected $casts = [
        'filters' => 'array', // Ensure filters are cast to an array
    ];
}
