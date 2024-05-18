<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/crear', [RegisterController::class, 'crear']);

