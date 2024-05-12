<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function products(Request $request)
    {
       
        $search = $request->search;
        if($search != null){
            // dd($request->all());
            $data = Product::with('category')->where('title', $search)->get();
            return response()->json(['products' => $data]);
        }

        $data = Product::with('category')->get();
        // return response()->json($data);
        return response()->json(['products' => $data]);
           
    }
}
