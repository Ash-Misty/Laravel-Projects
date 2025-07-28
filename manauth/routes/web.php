<?php


use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Register route
Route::view('register', 'auth.register')->middleware('guest');
Route::post('store', [RegisterController::class, 'store']);

// Home route (requires authentication) with name
Route::view('home', 'home')->middleware('auth')->name('home');

// Login routes
Route::view('login', 'auth.login')->middleware('guest')->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate']);

// Logout route (POST method)
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
