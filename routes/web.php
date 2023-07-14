<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
  Route::spladeTable();

  Route::group(
    ['prefix' => 'posts'], function () {
    Route::get(
      '/',
      \App\Actions\Posts\AllPosts::class
    )->middleware(['auth', 'verified'])->name('posts.index');

    Route::get(
      '/{post}',
      \App\Actions\Posts\ShowPost::class
    )->middleware(['auth', 'verified'])->name('posts.show');

    Route::get(
      '/{post}/edit',
      \App\Actions\Posts\PostForm::class
    )->middleware(['auth', 'verified'])->name('posts.edit');

    Route::patch(
      '/{post}',
      \App\Actions\Posts\UpdatePost::class
    )->middleware(['auth', 'verified'])->name('posts.update');

    Route::delete(
      '/{post}',
      \App\Actions\Posts\DeletePost::class
    )->middleware(['auth', 'verified'])->name('posts.destroy');
  });

  // Route::resource(
  //   'posts',
  //   \App\Http\Controllers\PostController::class
  // )->middleware(['auth', 'verified']);

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
