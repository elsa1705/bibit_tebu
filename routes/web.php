<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});
