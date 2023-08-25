<?php

use Illuminate\Support\Facades\Route;

Route::middleware('splade')->group(function () {

  Route::spladeTable();

  Route::group(
    ['prefix' => 'articles', 'middleware' => 'auth'], function () {

    Route::get(
      '/',
      \App\Actions\Posts\Index::class
    )->name('posts.index');

    Route::get(
      '/create',
      \App\Actions\Posts\Form::class
    )->name('posts.create');

    Route::post(
      '/',
      \App\Actions\Posts\StorePost::class
    )->name('posts.store');

    Route::patch(
      '/{post}',
      \App\Actions\Posts\UpdatePost::class
    )->name('posts.update');

    Route::delete(
      '/{post}',
      \App\Actions\Posts\DeletePost::class
    )->name('posts.destroy');

    Route::get(
      '/{post}',
      \App\Actions\Posts\ShowPost::class
    )->name('posts.show');

    Route::get(
      '/{post}/edit',
      \App\Actions\Posts\Form::class
    )->name('posts.edit');

  });

  Route::resource(
    'posts.comments',
    \App\Http\Controllers\CommentController::class
  )->middleware(['auth', 'verified']);

  // Route::resource('comments', \App\Http\Controllers\CommentController::class);
  // Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
  // Route::post('posts/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

  Route::middleware('auth')->group(function () {
    Route::get('/', function () {
      return view('dashboard');
    })->name('dashboard');
  });

  // Route::get('posts/export/', [\App\Http\Controllers\PostController::class, 'export']);

  require __DIR__ . '/auth.php';
});
