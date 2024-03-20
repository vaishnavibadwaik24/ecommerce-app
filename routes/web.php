<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route::get('users', [UserController::class, 'index'])->name('users');
// Route::get('users/create', [UserController::class, 'store'])->name('users.create');

Route::resource('users', UserController::class);

// GET|HEAD        users ........................... users.index › UserController@index
// POST            users ........................... users.store › UserController@store
// GET|HEAD        users/create .................. users.create › UserController@create
// GET|HEAD        users/{user} ...................... users.show › UserController@show
// PUT|PATCH       users/{user} .................. users.update › UserController@update
// DELETE          users/{user} ................ users.destroy › UserController@destroy
// GET|HEAD        users/{user}/edit ................. users.edit › UserController@edit