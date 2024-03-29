<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(){
    $categories = Category::all(); // Fetch all categories
    $products = Product::all(); 
    $banners = Banner::all();
    // dd($banners);
    return view('welcome', compact('categories','products','banners'));
    }
}
