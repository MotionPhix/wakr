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
      \App\Http\Controllers\Contacts\Form::class
    )->name('contacts.create');

    Route::post(
      '/',
      \App\Http\Controllers\Contacts\Store::class
    )->name('contacts.store');

    Route::patch(
      '/{contact}',
      \App\Http\Controllers\Contacts\Update::class
    )->name('contacts.update');

    Route::delete(
      '/{contact}',
      \App\Http\Controllers\Contacts\Trash::class
    )->name('contacts.destroy');

    Route::get(
      '/{contact}',
      \App\Http\Controllers\Contacts\Show::class
    )->name('contacts.show');

    Route::get(
      '/{contact}/edit',
      \App\Http\Controllers\Contacts\Form::class
    )->name('contacts.edit');

  });

  require __DIR__ . '/auth.php';
});
