<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet', [GreetController::class, 'index'])->name('greet');

Route::resource('tasks', TaskController::class);
Route::apiResource('users', UserController::class);
