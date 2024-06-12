<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $categories = Category::all(); // Fetch all categories
        $products = Product::all(); 
        $banners = Banner::all();
        $bestsellers = $products->sortDesc()->take(9);
        // dd($bestsellers);
        return view('welcome', compact('categories', 'products', 'banners', 'bestsellers'));
    }

    public function privacy_index(Request $request)
    {
        $input = $request->all();

        return view('privacy', compact('input'));
    }

    public function terms_index(Request $request)
    {
        $input = $request->all();

        return view('terms', compact('input'));
    }

    public function sales_index(Request $request)
    {
        $input = $request->all();

        return view('sales', compact('input'));
    }

    public function help_index(Request $request)
    {
        $input = $request->all();

        return view('help', compact('input'));
    }

}
