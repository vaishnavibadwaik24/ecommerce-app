<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search($search){
    // dd($search);
        $products = Product::where('title', 'like', "%{$search}%")->get();

        return response()->json(['products' => $products]);
    }
}
