<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category')->get(); 
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|unique:products|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'photo' =>  'required',
            'status' => 'required',
            'price'=>'required',
        ]);

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'price' => $request->price,
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->photo = $name;
        }

        $product->save();

        return redirect()->route('products.index');
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product){
        $product->update($request->all()); 
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->photo = $name; 
        }
        $product->save(); 
        return redirect()->route('products.index');
    }
    

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
    
}
