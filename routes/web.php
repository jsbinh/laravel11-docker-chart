<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserChartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserChartController::class, 'index']);
