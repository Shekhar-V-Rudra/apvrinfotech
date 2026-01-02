<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
     * Get the image URL from public directory.
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

        // Return the asset URL for public directory
        return asset($this->image);
    }
}
