<?php

namespace App\Actions\Posts;

use App\Models\Post;

class PostForm
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Post $post = null)
  {
    return view('posts.form', [
      'post' => $post ? $post : new Post(),
    ]);
  }
}
