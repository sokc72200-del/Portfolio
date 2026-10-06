<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experiences extends Model
{
    protected $fillable = [
        'company',
        'position',
        'location',
        'start_date',
        'end_date',
        'description',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];
} 
