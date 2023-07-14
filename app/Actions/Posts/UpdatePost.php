<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class UpdatePost
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Post $post)
  {
    $post->update($request->only('title', 'content'));

    // $post->image()->save(\App\Models\Image::make(['path' => $path]));

    Toast::title('Update notice')
      ->success($post->id . ' was updated')
      ->autoDismiss(5);
  }
}
