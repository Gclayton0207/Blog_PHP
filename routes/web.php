<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/posts', [PostsController::class,'index'])->name('posts');
Route::get('/post/{post:slug}', [PostController::class,'show'])->name('post');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login');
Route::get('/logout', [LoginController::class,'destroy'])->name('logout');
Route::get('/posts', [PostsController::class,'index'])->name('posts');
