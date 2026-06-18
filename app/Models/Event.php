<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'event_date',
        'location',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
