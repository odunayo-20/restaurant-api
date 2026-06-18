<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'table_number',
        'seats',
        'status',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
