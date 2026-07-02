<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Login
Route::view('/login', 'auth.login')
    ->middleware('guest');
Route::post('/login', Login::class);


//Register
Route::view('/register', 'auth.register')
    ->middleware('guest');
Route::post('/register', Register::class);


//Logout
Route::get('/logout', Logout::class);
