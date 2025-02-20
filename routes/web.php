<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::redirect('/', '/posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');



Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // CRUD or /register?

Route::post('/user', [UserController::class, 'store'])->name('user.store');




Route::get('/auth/create', [LoginController::class, 'create'])->name('auth.create'); 

Route::post('/auth', [LoginController::class, 'store'])->name('auth.store');

Route::delete('/auth/delete', [LoginController::class, 'delete'])->name('auth.delete');



