<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use ProtoneMedia\Splade\Facades\SEO;

class Index extends Controller
{
  public function __invoke(Request $request)
  {
    SEO::title('Explore a prolific of ideas | Wakr')
      ->description('Stay curious, discover stories, thinking, and expertise from writers!')
      ->keywords('laravel, splade, course');

    return view('contacts.index', [
      'contacts' => \App\Models\Contact::latest()
        ->with('phones')
        ->get(['id', 'first_name', 'last_name', 'company_id'])
    ]);
  }
}
