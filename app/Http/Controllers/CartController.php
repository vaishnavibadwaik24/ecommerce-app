<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use LaraCart;

class CartController extends Controller
{
    function store(Request $request){

        $price = (float)$request->price;

        // Adding an item to the cart
        $data = Cart::add($request->id, $request->title, 1, $price);

        return redirect()->back();
        
    }

    function index() {
        $data = Cart::content();
        // dd($data);
        return view('cart', compact('data'));
    }
        
    function remove($id) {
        Cart::remove($id);
        return redirect()->back();
    }

    function checkoutindex() {
        $data = Cart::content();
        return view('checkout', compact('data'));
    }

    function placeOrder(Request $request) {
        $input = $request->all();
        $user = Detail::create($input);
        return redirect()->route('razorpay-payment');
    }
}
