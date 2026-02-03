<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post-form');
});

Route::post('form-data', [PostController::class, 'uploadBlog']);

Route::get('post-list', [PostController::class, 'postlist'])->name('post.list');
Route::get('posts/{id}', [PostController::class, 'show'])->name('post.single');

Route::get('edit-post/{post}',[PostController::class, 'edit'])->name('post.edit');
Route::put('update-post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('delete/{post}', [PostController::class,'destroy'])->name('post.destroy');