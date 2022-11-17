<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/user-list', [UserController::class, 'index'])->name('user_list');
Route::delete('/user_delete/{user}', [UserController::class, 'destroy'])->name('user_delete');
Route::get('/user_create', [UserController::class, 'create'])->name('user_create');
Route::post('/user_store', [UserController::class, 'store'])->name('user_store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user_edit');
Route::put('/user_update/{user}', [UserController::class, 'update'])->name('user_update');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
