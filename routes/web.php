<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::redirect('/', '/posts');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

//accounts
Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // CRUD or /register?

Route::post('/user', [UserController::class, 'store'])->name('user.store'); // CRUD or register.store to /register?

//session
Route::get('/auth/create', [LoginController::class, 'create'])->name('auth.create'); // CRUD or login?

Route::post('/auth', [LoginController::class, 'store'])->name('auth.store'); // CRUD or...

Route::delete('/auth/destroy', [LoginController::class, 'destroy'])->name('auth.destroy'); // CRUD or logout? DELETE or POST?

//comments
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

//myposts //move to PostController or not???? or maybe keep it like this & try incorporating middleware?
Route::get('/myposts/index', [MyPostController::class, 'index'])->name('myposts.index');

Route::get('/myposts/{post}/edit', [MyPostController::class, 'edit'])->name('myposts.edit');

Route::put('/myposts/{post}', [MyPostController::class, 'update'])->name('myposts.update');

Route::delete('/myposts/{post}', [MyPostController::class, 'destroy'])->name('myposts.destroy');