<?php

namespace App\Actions\Contacts;

use App\Http\Requests\Contacts\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;

class Store
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request) //ContactStore
  {
    dd($request->all());

    $validated_data = $request->validated();

    Contact::create($validated_data);

    /*if ($request->hasFile('photo_path')) { // save file if image file is available
      $imagePath = $request->file('photo_path')->store('posts', 'local'); // Save the image to local storage in the 'posts' directory

      // Create the associated image record in the database
      $post->images()->create([
        'path' => $imagePath,
        'name' => $request->file('photo_path')->getClientOriginalName(),
      ]);
    }*/

    Toast::title('Awesome!')
      ->success('New contact was added!')
      ->autoDismiss(5);

    return redirect(route('contacts.index'));
  }
}
