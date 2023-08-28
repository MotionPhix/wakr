<?php

namespace App\Actions\Projects;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;

class Delete
{

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Project  $project
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Project $project)
  {
    // Eager load images and comments to minimize database queries
    $project->load('images', 'comments');

    // Delete images and their associated files
    $project->images->each(function (\App\Models\Image $image) {
      $image->delete();
      // Delete the associated file from storage
      Storage::delete($image->path);
    });

    // Delete comments
    $project->comments()->delete();

    // Delete the contact itself
    $project->delete();

    Toast::title('There you go!')
      ->info('Project is permanently deleted')
      ->autoDismiss(5);

    return redirect()->route('projects.index');
  }
}
