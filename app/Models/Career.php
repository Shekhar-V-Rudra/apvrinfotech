<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class Career extends Model
{
    protected $fillable = [
        'job_title',
        'vacancy',  
        'experience',
        'location',
        'job_type',
        'is_active',    
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'vacancy' => 'integer',
        'sort_order' => 'integer',
    ];
}
