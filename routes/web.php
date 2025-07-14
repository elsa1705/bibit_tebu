<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
<<<<<<< HEAD
})->name('contact');

=======
});
>>>>>>> 3b6255a30fcfc401b7ba6a7a21dead40fdab71f0
Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index']);
