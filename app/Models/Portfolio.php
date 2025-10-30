<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'category',
        'image',
        'description',
        'project_url',
        'is_active',
        'sort_order',
    ];
}
