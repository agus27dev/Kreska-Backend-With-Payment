<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $casts = [
        'province_id'   => 'integer',
    ];

    protected $fillable = [
        'province_id', 'name'
    ];
}
