<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::resource('articles', ArticleController::class);

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'] )->name('login.auth');
