<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;

class DeletePost
{

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Post $post)
  {
    // Eager load images and comments to minimize database queries
    $post->load('images', 'comments');

    // Delete images and their associated files
    $post->images->each(function (\App\Models\Image $image) {
      $image->delete();
      // Delete the associated file from storage
      Storage::delete($image->path);
    });

    // Delete comments
    $post->comments()->delete();

    // Delete the post itself
    $post->delete();

    Toast::title('That\'s it!')
      ->info($post->title . ' is permanently gone')
      ->autoDismiss(5);

    return redirect()->route('posts.index');
  }
}
