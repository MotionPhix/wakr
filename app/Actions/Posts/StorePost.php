<?php

namespace App\Actions\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;

class StorePost
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $validated_posting = $request->validate([
      'title' => 'required|min:4',
      'content' => 'required|min:8',
      'photo_path' => 'image|File::image()->atLeast(1024)->smallerThan(12 * 1024)'
    ]);

    $validated_posting['slug'] = Str::slug($validated_posting['title']);
    $validated_posting['user_id'] = auth()->user()->id;

    $post = Post::create($validated_posting);

    if ($request->hasFile('photo_path')) { // save file if image file is available
      $imagePath = $request->file('photo_path')->store('posts', 'local'); // Save the image to local storage in the 'posts' directory

      // Create the associated image record in the database
      $post->images()->create([
        'path' => $imagePath,
        'name' => $request->file('photo_path')->getClientOriginalName(),
      ]);
    }

    Toast::title('Awesome!')
      ->success('Your post was added successfully!')
      ->autoDismiss(5);

    return redirect(route('posts.index'));
  }
}
