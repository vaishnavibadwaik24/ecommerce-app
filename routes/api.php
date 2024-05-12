<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\UserController;
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
    Route::get('category/show/{id}', [CategoryController::class,  'show']);
    Route::post('category/update/{id}' , [CategoryController::class, 'update']);
    Route::delete('category/destroy/{id}', [CategoryController::class, 'destroy']);
});

 Route::post('login', [UserController::class, 'login']); 
 Route::post('register', [UserController::class, 'register']); 
 Route::get('products', [ShopController::class, 'products']);
 Route::post('contacts', [ContactController::class, 'contacts']);
 Route::post('cart', [CartController::class, 'store']);

 Route::get('cart/count', [CartController::class, 'index']);

