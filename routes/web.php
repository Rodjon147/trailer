<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/afisha', function () {
    return view('index');
});

Route::get('/premieres', function () {
    return view('premieres');
});

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/sign up', function () {
    return view('sign up');
});

Route::get('/sign in', function () {
    return view('sign in');
});
