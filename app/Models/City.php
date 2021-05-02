<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $casts = [
        'province_id'   =>  'integer',
        'city_id'       =>  'integer',
    ];

    protected $fillable = [
        'province_id', 'city_id', 'name'
    ];
}
