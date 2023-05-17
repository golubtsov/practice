<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');

Route::get('/turs', [\App\Http\Controllers\TurController::class, 'index'])->name('turs');
Route::get('/turs/{id}', [\App\Http\Controllers\TurController::class, 'tur'])->name('tur');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

Route::post('/questions/create', [\App\Http\Controllers\QuestionController::class, 'create'])->name('question.create');

Route::get('/oder/create', [\App\Http\Controllers\OderController::class, 'create'])->name('oder.create');
