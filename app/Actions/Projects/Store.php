<?php

namespace App\Actions\Projects;

use App\Http\Requests\Projects\ProjectStoreRequest;
use App\Models\Project;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;

class Store
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(ProjectStoreRequest $request)
  {
    $validated_data = $request->validated();

    Project::create($validated_data);

    /*if ($request->hasFile('photo_path')) { // save file if image file is available
      $imagePath = $request->file('photo_path')->store('posts', 'local'); // Save the image to local storage in the 'posts' directory

      // Create the associated image record in the database
      $post->images()->create([
        'path' => $imagePath,
        'name' => $request->file('photo_path')->getClientOriginalName(),
      ]);
    }*/

    Toast::title('Good going!')
      ->success('A project was added!')
      ->autoDismiss(5);

    return redirect(route('projects.index'));
  }
}
