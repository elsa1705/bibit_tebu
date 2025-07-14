<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index']);