<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Portfolio');
});

Route::get('/register',[AuthController::class,'showRegister'])->name('register.form');
Route::post('/register',[AuthController::class,'Register'])->name('register');
Route::get('/login',[AuthController::class,'showlogin'])->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',function(){});



