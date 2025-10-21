<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'service',
        'message',
        'emailed_at',
    ];

    protected $casts = [
        'emailed_at' => 'datetime',
    ];
}
