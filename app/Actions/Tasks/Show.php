<?php

namespace App\Actions\Contacts;

use App\Models\Contact;
use ProtoneMedia\Splade\Facades\SEO;

class Show
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Contact  $contact
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Contact $contact)
  {
    SEO::title($contact->full_name . ' | Wakr')
      ->description($contact->full_name . '\'s details')
      ->keywords('project management system');

    return view('contacts.show', [
      'contact' => $contact,
      // 'projects' => $contact->projects()->latest()->get(),
    ]);

  }
}
