<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'category',
        'image',
        'short_details',
        'description',
        'project_url',
        'is_active',
        'sort_order',
    ];

    /**
     * Get the image URL from storage.
     */
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }

        // If it's already a full URL (starts with http:// or https://), return as is
        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        // Otherwise, return the storage URL from public disk
        $disk = Storage::disk('public');
        return $disk->exists($this->image) ? asset('storage/' . $this->image) : null;
    }
}
