<?php

namespace App\Actions\Posts;

use App\Models\Post;

class Form
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Post $post = null)
  {
    return view('posts.form', [
      'post' => $post ?? new Post(),
    ]);
  }
}
