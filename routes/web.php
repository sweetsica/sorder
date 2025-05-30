<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

Route::get('/', function () {
    return view('welcome');
});

//Static pages
Route::get('/login', [StaticPageController::class, 'login'])->name('static.login');
Route::get('/register', [StaticPageController::class, 'register'])->name('static.register');
Route::get('/', [StaticPageController::class, 'index'])->name('static.index');
