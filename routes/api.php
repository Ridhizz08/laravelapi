<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('user-details', [UserController::class, 'userDetails']);
});
// Client ID: 1
// Client secret: r5eMrM56zRH0nDlrCwOyAos5ap7RXHXxQlBRfQtg