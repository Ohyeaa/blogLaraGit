<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\LabelPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LabelUserController;
use Illuminate\Support\Facades\Route;

// Route::resource('articles', ArticleController::class);
// Route::get('articles/{article}/premium', [ArticleController::class, 'premium'])->name('article.premium');

//posts, public
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::redirect('/', '/posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

//myposts
Route::get('/myposts', [MyPostController::class, 'index'])->name('myposts.index');
Route::get('/myposts/create', [MyPostController::class, 'create'])->name('myposts.create');
Route::post('/posts', [MyPostController::class, 'store'])->name('myposts.store');
Route::get('/myposts/{post}/edit', [MyPostController::class, 'edit'])->name('myposts.edit');
Route::put('/myposts/{post}', [MyPostController::class, 'update'])->name('myposts.update');
Route::delete('/myposts/{post}', [MyPostController::class, 'destroy'])->name('myposts.destroy');

//user account
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

//session
Route::get('/auth/create', [LoginController::class, 'create'])->name('auth.create');
Route::post('/auth', [LoginController::class, 'store'])->name('auth.store');
Route::delete('/auth/destroy', [LoginController::class, 'destroy'])->name('auth.destroy');

//comments
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

//subscribe
Route::get('/subscribe/{user}/edit', [SubscribeController::class, 'edit'])->name('subscribe.edit');
Route::patch('/subscribe/{user}', [SubscribeController::class, 'update'])->name('subscribe.update');

//labels
Route::get('/labels', [LabelController::class, 'index'])->name('labels.index');
Route::post('/labels', [LabelController::class, 'store'])->name('labels.store');

//label-user
Route::post('/label-user/{label}', [LabelUserController::class, 'store'])->name('label-user.store'); // url not quite crud?
Route::delete('/labels/{label}', [LabelUserController::class, 'destroy'])->name('labels.destroy');
//label-post
Route::post('/label-post/{post}', [LabelPostController::class, 'store'])->name('label-post.store');
Route::delete('/label-post/{post}', [LabelPostController::class, 'destroy'])->name('label-post.destroy');
