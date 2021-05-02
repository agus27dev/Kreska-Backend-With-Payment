<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $casts = [
        'customer_id'   => 'integer',
        'cost_courier'  => 'integer',
        'weight'        => 'integer',
        'phone'         => 'integer',
        'province'      => 'integer',
        'city'          => 'integer',
        'grand_total'   => 'integer'
    ];

    protected $fillable = [
        'invoice', 'customer_id', 'courier', 'service', 'cost_courier',
        'weight', 'name', 'phone', 'province', 'city', 'address', 'status',
        'snap_token', 'grand_total', 'no_resi'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
