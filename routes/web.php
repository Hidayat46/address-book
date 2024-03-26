<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('master', function () {
    return view('layout.master');
});

Route::get('header', function () {
    return view('layout.sidebar');
});

