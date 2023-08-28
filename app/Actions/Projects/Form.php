<?php

namespace App\Actions\Projects;

use App\Models\Contact;
use App\Models\Project;

class Form
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Project $project
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Project $project = null)
  {
    return view('projects.form', [
      'project' => $project ?? new Project(),
      'contacts' => Contact::pluck('first_name', 'id')->transform(function ($firstName, $id) {
        $contact = Contact::with('company')->find($id);

        return $firstName . ' ' . $contact->last_name . ' | ' . $contact->company->name;
      })->toArray(),
    ]);
  }
}
