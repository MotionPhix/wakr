<?php

namespace App\Actions\Posts;

use Illuminate\Http\Response;

class Index
{/**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {
    return view('posts.index', [
      'posts' => \App\Models\Post::latest()
        ->with('user')
        ->withCount('comments')
        ->get()
    ]);
  }
}
