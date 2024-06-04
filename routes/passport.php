<?php

use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\Http\Controllers\AuthorizationController;
use Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController;
use Laravel\Passport\Http\Controllers\ClientsController;
use Laravel\Passport\Http\Controllers\PersonalAccessTokenController;
use Laravel\Passport\Http\Controllers\ScopeController;
use Laravel\Passport\Http\Controllers\TransientTokenController;
use Laravel\Passport\Http\Middleware\CheckClientCredentials;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api']], function () {
    // Passport Routes
    Route::post('/oauth/token', [AccessTokenController::class, 'issueToken']);
    Route::get('/oauth/authorize', [AuthorizationController::class, 'authorize']);
    Route::get('/oauth/scopes', [ScopeController::class, 'all']);
    Route::get('/oauth/personal-access-tokens', [PersonalAccessTokenController::class, 'forUser']);
    Route::post('/oauth/personal-access-tokens', [PersonalAccessTokenController::class, 'store']);
    Route::delete('/oauth/personal-access-tokens/{token_id}', [PersonalAccessTokenController::class, 'destroy']);
});
