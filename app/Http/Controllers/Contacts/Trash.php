<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;

class Trash extends Controller
{
  public function __invoke(Contact $contact)
  {

    // Eager load images and comments to minimize database queries
    $contact->load('images', 'comments');

    // Delete images and their associated files
    $contact->images->each(function (\App\Models\Image $image) {
      $image->delete();
      // Delete the associated file from storage
      Storage::delete($image->path);
    });

    // Delete comments
    $contact->comments()->delete();

    // Delete the contact itself
    $contact->delete();

    Toast::title('That\'s it!')
      ->info($contact->title . ' is permanently gone')
      ->autoDismiss(5);

    return redirect()->route('contacts.index');
  }
}
