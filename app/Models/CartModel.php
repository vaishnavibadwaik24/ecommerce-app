<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'productId',
        'name',
        'qty',
        'price',
        'user_id',
    ];

    public function product() 
    {
        return $this->belongsTo(Product::class);
    } 
}
