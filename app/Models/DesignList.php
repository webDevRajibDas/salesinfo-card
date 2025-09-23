<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignList extends Model
{
    protected $fillable = [
        'title',
        'image',
        'design_no',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
