<?php

namespace App\Actions\Contacts;

use App\Models\Company;
use App\Models\Contact;

class Form
{
  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Contact $contact
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Contact $contact = null)
  {
    return view('contacts.form', [
      'contact' => $contact ? $contact->load('phones') : (new Contact())->load('phones'),
      'companies' => Company::pluck('name', 'id')
    ]);
  }
}
