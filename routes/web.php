<?php

use App\Http\Controllers\API\V1\Auth\AuthController;
use App\Http\Controllers\Web\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');;
Route::get('/register', [LoginController::class, 'register'])->name('register');;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user', [AuthController::class, 'me']);
});
