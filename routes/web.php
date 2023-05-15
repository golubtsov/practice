<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');

Route::get('/turs', [\App\Http\Controllers\TurController::class, 'index'])->name('turs');
Route::get('/turs/{id}', [\App\Http\Controllers\TurController::class, 'tur'])->name('tur');

