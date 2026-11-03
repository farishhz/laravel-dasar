<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HaloController;

Route::get('/halo', [HaloController::class, 'index']);