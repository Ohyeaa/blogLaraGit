<?php

use App\Http\Controllers\AuthenticatorController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::redirect('/', '/posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');



Route::get('/login', [AuthenticatorController::class, 'create'])->name('auth.create');