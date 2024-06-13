<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ShopDetailController extends Controller
{
    public function index() {
        $categories = Category::all(); // Fetch all categories
        $products = Product::all(); 
        $bestsellers = $products->sortDesc()->take(5); 
        $reviews = Review::all();
        return view('shopdetail', compact('categories','products','bestsellers','reviews'));

    }

    public function create()
    {   
        return view('shopdetail');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'review' => 'required|string',
            // 'rating' => 'required|numeric',
        ]);
        // dd($request);
        Review::create($validatedData);
    
        return redirect()->back();
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); 
        $categories = Category::all(); 
        $products = Product::all(); 
        $bestsellers = $products->sortDesc()->take(5); 
        $reviews = Review::all();
        
        return view('shopdetail', compact('product', 'categories', 'products','bestsellers','reviews'));
    }
    
}
