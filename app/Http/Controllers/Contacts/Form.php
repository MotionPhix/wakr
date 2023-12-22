<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact;

class Form extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
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
