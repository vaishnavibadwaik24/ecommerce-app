<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Models\Category; 
use App\Models\Product;
use App\Models\Banner;


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

Route::get('/', function () {
    $categories = Category::all(); // Fetch all categories
    $products = Product::all(); 

    return view('welcome', ['categories' => $categories, 'products' => $products]);
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route::get('users', [UserController::class, 'index'])->name('users');
// Route::get('users/create', [UserController::class, 'store'])->name('users.create');

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('banners', BannerController::class);

Route::post('cart/store', [CartController::class, 'store'])->name('cart.store');
