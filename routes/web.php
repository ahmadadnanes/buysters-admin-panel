<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\UsersController::class , 'index'])
    ->middleware('guest')
    ->name('home');

Route::get('/login', [AuthController::class , 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class , 'store'])
    ->middleware('guest');
