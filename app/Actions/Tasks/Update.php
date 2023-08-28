<?php

namespace App\Actions\Contacts;

use App\Models\Contact;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class Update
{
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Contact  $contact
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request, Contact $contact)
  {
    $contact->update($request->only('first_name', 'last_name', 'email', 'company_id'));

    // $contact->image()->save(\App\Models\Image::make(['path' => $path]));

    Toast::title('Hooray!')
      ->success('Contact was updated')
      ->autoDismiss(5);

    return redirect(route('contacts.show', $contact));
  }
}
