<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\CartModel;

class CartController extends Controller
{
    function store(Request $request){
        $data=  Cart::add($request->productId, $request->name, 1, $request->price);

        $data = new CartModel();
        $data->user_id = null;
        $data->product_id =  $request->productId ;
        $data->name = $request->name;
        $data->qty = 1;
        $data->price = $request->price;
        $data->save();
        return response()->json(['message' => 'Item Added to Cart']);       
    }

    function index() {
      $cartCount = CartModel::count();
      return response()->json(['message' => 'Cart count fetched successfully', 'cartCount' => $cartCount]);       
    }
}
