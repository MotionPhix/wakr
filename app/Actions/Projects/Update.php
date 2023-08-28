<?php

namespace App\Actions\Projects;

use App\Models\Project;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class Update
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Project  $project
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Project $project)
  {
    $project->update($request->only('first_name', 'last_name', 'email', 'company_id'));

    // $project->image()->save(\App\Models\Image::make(['path' => $path]));

    Toast::title('That\'s it!')
      ->success('Project was updated')
      ->autoDismiss(5);

    return redirect(route('projects.show', $project));
  }
}
