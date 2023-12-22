<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use ProtoneMedia\Splade\Facades\SEO;

class Show extends Controller
{
  public function __invoke(Contact $contact)
  {
    SEO::title($contact->full_name . ' | Wakr')
      ->description($contact->full_name . '\'s details')
      ->keywords('project management system');

    return view('contacts.show', [
      'contact' => $contact,
    ]);
  }
}
