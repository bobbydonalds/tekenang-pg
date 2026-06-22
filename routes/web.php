<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SosmedController;

Route::get('/last', function () {
    return view('welcome');
});

Route::get('/ww', function () {
    return view('index');
});

Route::resource('/', SosmedController::class, );