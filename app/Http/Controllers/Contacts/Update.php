<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactRequest;
use App\Models\Contact;
use ProtoneMedia\Splade\Facades\Toast;

class Update extends Controller
{
  public function __invoke(ContactRequest $request, Contact $contact)
  {

    $contact->update($request->only('first_name', 'last_name', 'email', 'company_id'));

    // $contact->image()->save(\App\Models\Image::make(['path' => $path]));

    Toast::title('Hooray!')
      ->success('Contact was updated')
      ->autoDismiss(5);

    return redirect(route('contacts.show', $contact));
  }
}
