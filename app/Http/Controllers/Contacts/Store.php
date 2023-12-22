<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Contact\ContactRequest;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;

class Store extends Controller
{
  public function __invoke(ContactRequest $request)
  {

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
