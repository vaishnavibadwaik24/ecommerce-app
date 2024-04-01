<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Session;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        
        Stripe\Stripe::setApiKey('sk_test_51OzaxASGAA3x2QV7yhUvlhCtQHgGJqqsSTXCtYCi8TFmyxnmKnmkMFyNRRBEQVNJrt1wt4geUVIt7y8wHqp55BUS00yP1dV0bv');
    
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "Test payment" 
        ]);
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}