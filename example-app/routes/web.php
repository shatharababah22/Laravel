<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
use App\Http\Controllers\LoginController;

Route::get('/check', [LoginController::class, 'index'])->name('LoginController');
