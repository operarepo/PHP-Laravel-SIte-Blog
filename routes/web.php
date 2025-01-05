<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostController::class);
Route::resource('index', PostController::class);
Route::resource('create', PostController::class);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


// Маршрут для создания нового поста

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');


// Маршрут для хранения нового поста

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
