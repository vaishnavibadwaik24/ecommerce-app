<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use LaraCart;

class CartController extends Controller
{
    function store(Request $request){
        // Adding an item to the cart
       $data = Cart::add($request->id, 'Product 1', 1, 9.99);
       return redirect()->back();
        
    }
}
