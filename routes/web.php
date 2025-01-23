<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('form.login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/', function () {
    return response()->file(public_path('index.html'));
});