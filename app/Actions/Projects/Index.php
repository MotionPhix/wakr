<?php

namespace App\Actions\Projects;

use ProtoneMedia\Splade\Facades\SEO;

class Index
{
  public function __invoke()
  {
    SEO::title('Explore a prolific of ideas | Blogger')
      ->description('Stay curious, discover stories, thinking, and expertise from writers!')
      ->keywords('laravel, splade, course');

    return view('projects.index', [
      'field' => 'name',
      'direction' => 'asc',
      'projects' => \App\Models\Project::with('contact')->latest()
        ->get(['id', 'contact_id', 'name', 'description', 'status', 'start_date', 'end_date'])
    ]);
  }
}
