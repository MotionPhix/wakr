<?php

namespace App\Actions\Projects;

use App\Models\Project;
use ProtoneMedia\Splade\Facades\SEO;

class Show
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Project  $project
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Project $project)
  {
    SEO::title($project->full_name . ' | Wakr')
      ->description($project->full_name . '\'s details')
      ->keywords('project management system');

    return view('projects.show', [
      'project' => $project,
      // 'projects' => $contact->projects()->latest()->get(),
    ]);

  }
}
