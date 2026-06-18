<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'image',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
