<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\api\SiteInfoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\api\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::post('category/create',[CategoryController::class,'store']);
    Route::get('category', [CategoryController::class, 'index']);
    Route::get('category/{id}', [CategoryController::class,  'show']);
    Route::post('category/update/{id}' , [CategoryController::class, 'update']);
    Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy']);
});

require __DIR__ . '/passport.php';

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
// Route::post('login', [UserController::class, 'login']); 
// Route::post('register', [UserController::class, 'register']); 

Route::get('products', [ShopController::class, 'products']);
Route::get('productDetail/{id}', [ShopController::class, 'show']);
Route::post('contacts', [ContactController::class, 'contacts']);
Route::post('cart', [CartController::class, 'index']);
Route::get('cart/count', [CartController::class, 'index']);

Route::get('visitor', [VisitorController::class, 'index']);
Route::get('siteinfo', [SiteInfoController::class, 'siteinfo']);
Route::get('search/{search}', [ProductController::class, 'search']);