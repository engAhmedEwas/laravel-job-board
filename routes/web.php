<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index']);
Route::get('/job', [JobController::class,'index']);
Route::get('/about', [IndexController::class,'about']);
Route::get('/contactUs', [IndexController::class,'contactUs']);
