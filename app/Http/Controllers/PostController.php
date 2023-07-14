<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Models\Post;
use App\Tables\Users;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Files\TemporaryFile;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class PostController extends Controller
{

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated_posting = $request->validate([
      'title' => 'required|min:4',
      'content' => 'required|min:8',
      'photo_path' => 'image|File::image()->atLeast(1024)->smallerThan(12 * 1024)'
    ]);

    $image_params = $this->saveImage($request);

    $validated_posting['slug'] = Str::slug($validated_posting['title']);
    $validated_posting['user_id'] = Auth::user()->id;

    $post = Post::create($validated_posting);

    if (is_array($image_params)) { // save file if image file is available
      $post->image()->save(\App\Models\Image::make([
        'name' => $image_params['file_name'],
        'path' => $image_params['file_path']
      ]));
    }

    Toast::title('Posting notice')
      ->success('Your posting was added successfully!')
      ->autoDismiss(5);

    return redirect(route('posts.index'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    if (Gate::allows('edit_post', $post)) {
      $path = $this->saveImage($request);

      $post->update($request->only('title', 'content'));

      $post->image()->save(\App\Models\Image::make(['path' => $path]));

      Toast::title('Update notice')
        ->success($post->id . ' was updated')
        ->autoDismiss(5);
    } else {
      Toast::title('Action not allowed!')
        ->warning('You cannot edit someone\'s post!')
        ->autoDismiss(5);
    }

    return redirect()->back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    if (Gate::allows('delete_post', $post)) {
      if ($post->image) {
        $this->removeImage('posts\\' . $post->image->path);
      }

      $post->image()->delete();
      $post->delete();

      Toast::title('That\'s it. Gone!')
        ->info($post->title . ' is permanently deleted!')
        ->autoDismiss(5);

      return redirect()->route('posts.index');
    } else {
      Toast::title('Wrong Post!')
        ->warning('You cannot delete someone\'s post!')
        ->autoDismiss(5);

      return redirect()->back();
    }
  }

  /**
   * Export the posts to files
   *
   * @param  \ProtoneMedia\Splade\SpladeTable  $table
   * @return \Illuminate\Http\Response
   */
  public function configure(SpladeTable $table)
  {
    // return Excel::download(new PostsExport, 'posts.xlsx');
    $table->export(
      label: 'CSV export',
      filename: 'posts.csv',
      type: Excel::CSV
    );
  }

  public function saveImage(Request $request): array|string
  {
    if ($request->hasFile('photo_path')) {
      $image = $request->file('photo_path');

      $file_name = $image->getClientOriginalName();
      $file_path = uniqid() . '.' . $image->getClientOriginalExtension();

      $image->storeAs('posts', $file_path);

      return [
        'file_name' => $file_name,
        'file_path' => $file_path
      ];
    }

    return '';
  }

  public function removeImage($path)
  {
    if (File::exists(public_path('storage\\' . $path))) {
      unlink(public_path('storage\\' . $path));
    }
  }
}
