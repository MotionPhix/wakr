<?php

use Illuminate\Support\Facades\Route;

Route::middleware('splade')->group(function () {

  Route::group(['middleware' => 'auth'], function () {

    Route::get(
      '/',
      \App\Http\Controllers\Contacts\Index::class
    )->name('contacts.index');

    Route::get(
      '/create',
      \App\Actions\Contacts\Form::class
    )->name('contacts.create');

    Route::post(
      '/',
      \App\Actions\Contacts\Store::class
    )->name('contacts.store');

    Route::patch(
      '/{contact}',
      \App\Actions\Contacts\Update::class
    )->name('contacts.update');

    Route::delete(
      '/{contact}',
      \App\Actions\Contacts\Delete::class
    )->name('contacts.destroy');

    Route::get(
      '/{contact}',
      \App\Actions\Contacts\Show::class
    )->name('contacts.show');

    Route::get(
      '/{contact}/edit',
      \App\Actions\Contacts\Form::class
    )->name('contacts.edit');

  });

  Route::group(
    ['prefix' => 'projects', 'middleware' => 'auth'], function () {

    Route::get(
      '/',
      \App\Actions\Projects\Index::class
    )->name('projects.index');

    Route::get(
      '/create',
      \App\Actions\Projects\Form::class
    )->name('projects.create');

    Route::post(
      '/',
      \App\Actions\Projects\Store::class
    )->name('projects.store');

    Route::patch(
      '/{project}',
      \App\Actions\Projects\Update::class
    )->name('projects.update');

    Route::delete(
      '/{project}',
      \App\Actions\Projects\Delete::class
    )->name('projects.destroy');

    Route::get(
      '/{project}',
      \App\Actions\Projects\Show::class
    )->name('projects.show');

    Route::get(
      '/{project}/edit',
      \App\Actions\Projects\Form::class
    )->name('projects.edit');

  });

  require __DIR__ . '/auth.php';
});
