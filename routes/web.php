<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RazorpayPaymentController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Banner;
use App\Models\Category; 
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('index');


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('banners', BannerController::class);
Route::resource('contacts', ContactController::class);


// Cart
Route::post('cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('cart', [CartController::class, 'index']);
Route::get('cart/remove/{id}', [CartController::class, 'remove']);

// Checkout
Route::get('checkout', [CartController::class, 'checkoutindex']);
Route::post('/place/order', [CartController::class, 'placeOrder']);

Route::get('stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('stripePost', [StripePaymentController::class, 'stripePost']);

Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index'])->name('razorpay-payment');
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');


