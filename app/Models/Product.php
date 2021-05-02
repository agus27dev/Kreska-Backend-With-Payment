<?php

namespace App\Models;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'category_id'  =>   'Integer',
        'weight'       =>   'Integer',
        'price'        =>   'Integer',
        'discount'     =>   'integer',
        'stock'        =>   'integer',
    ];

    protected $fillable = [
        'image', 'title', 'slug', 'category_id', 'content', 'weight',
        'price', 'discount', 'stock'
    ];

    public function getImageAttribute($image){
        return asset('storage/products/' . $image);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
