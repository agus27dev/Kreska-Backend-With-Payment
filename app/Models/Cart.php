<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $casts = [
        'product_id'    => 'integer',
        'customer_id'   => 'integer',
        'quantity'      => 'integer',
        'price'         => 'integer',
        'weight'        => 'integer',
    ];

    protected $fillable = [
        'product_id', 'customer_id', 'price', 'quantity', 'weight'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
