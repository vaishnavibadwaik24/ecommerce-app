<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        $categories = Category::all(); // Fetch all categories
        $products = Product::all(); 
        $bestsellers = $products->sortDesc()->take(4); 
        
        return view('shop', compact('categories','products','bestsellers'));
    }

}