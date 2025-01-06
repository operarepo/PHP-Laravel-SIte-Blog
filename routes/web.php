<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// Главная страница
Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', PostController::class);
// Удаление пост
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// Отображение всех посто
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Отображение конкретного поста по slug
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
// Отображение формы для создания нового поста
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Сохранение нового поста
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
?>
