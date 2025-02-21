<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPostsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::redirect('/', '/posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');



Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // CRUD or /register?

Route::post('/user', [UserController::class, 'store'])->name('user.store'); // CRUD or register.store to /register?



Route::get('/auth/create', [LoginController::class, 'create'])->name('auth.create'); // CRUD or login?

Route::post('/auth', [LoginController::class, 'store'])->name('auth.store'); // CRUD or...

Route::delete('/auth/destroy', [LoginController::class, 'destroy'])->name('auth.destroy'); // CRUD or logout? DELETE or POST?



Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');



Route::get('/myposts/index', [MyPostsController::class, 'index'])->name('myposts.index');