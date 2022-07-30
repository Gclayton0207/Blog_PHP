<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/posts', [PostsController::class,'index'])->name('posts');
Route::get('/post/{post:slug}', [PostController::class,'show'])->name('post');
