<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");