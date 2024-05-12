<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'category_id', 'photo', 'status', 'price'
    ];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    } 
    
}
