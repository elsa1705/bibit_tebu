<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');

Route::get('/about', function () {
    return view('about');
})->name('about');