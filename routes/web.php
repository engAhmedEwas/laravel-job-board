<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index']);
Route::get('/job', [JobController::class,'index']);
Route::get('/about', [IndexController::class,'about']);
Route::get('/contactUs', [IndexController::class,'contactUs']);

Route::resource('blog', PostController::class);
Route::resource('comments', CommentController::class);
Route::resource('tags', TagController::class);

Route::get('/comments', [CommentController::class,'index']);

Route::get('/tags', [TagController::class,'index']);
Route::get('/tags/show', [TagController::class,'testManyToMany']);
