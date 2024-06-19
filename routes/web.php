<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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
Route::get('privacy', [WelcomeController::class, 'privacy_index']);
Route::get('terms', [WelcomeController::class, 'terms_index']);
Route::get('sales', [WelcomeController::class, 'sales_index']);
Route::get('help', [WelcomeController::class, 'help_index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::resource('users', UserController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('products', ProductController::class)->middleware('auth');
Route::resource('banners', BannerController::class)->middleware('auth');
Route::resource('contacts', ContactController::class);
Route::resource('shops', ShopController::class);
Route::resource('shopdetails', ShopDetailController::class);

Route::get('siteinfo', [SiteInfoController::class, 'index'])->name('siteinfo.index');
Route::get('siteinfo/create', [SiteInfoController::class, 'create'])->name('siteinfo.create');
Route::post('siteinfo', [SiteInfoController::class, 'store'])->name('siteinfo.store');

// Cart
Route::post('cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('cart', [CartController::class, 'index']);
Route::get('cart/remove/{id}', [CartController::class, 'remove']);

// Checkout
Route::get('checkout', [CartController::class, 'checkoutindex']);
Route::post('/place/order', [CartController::class, 'placeOrder']);

Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index'])->name('razorpay-payment');
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::get('/testimonial', [TestimonialController::class, 'testimonial_index'])->name('testimonial');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware('auth')->group(function () {
    Route::get('updateprofile', [ProfileController::class, 'edit'])->name('updateprofile.edit');
    Route::post('updateprofile', [ProfileController::class, 'update'])->name('updateprofile.update');
});


require __DIR__.'/auth.php';