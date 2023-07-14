<?php

namespace App\Actions\Posts;

use App\Models\Post;
use ProtoneMedia\Splade\Facades\SEO;

class ShowPost
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Post $post)
  {

    SEO::title($post->title . ' | Posts')
      ->description('Become the Splade expert!')
      ->keywords('laravel, splade, course');

    return view('posts.show', [
      'post' => $post,
      'comments' => $post->comments()->latest()->get(),
      'posts' => auth()->user()->posts
    ]);

  }
}
