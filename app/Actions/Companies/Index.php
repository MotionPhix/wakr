<?php

namespace App\Actions\Contacts;

use ProtoneMedia\Splade\Facades\SEO;

class Index
{
  public function __invoke()
  {
    SEO::title('Explore a prolific of ideas | Blogger')
      ->description('Stay curious, discover stories, thinking, and expertise from writers!')
      ->keywords('laravel, splade, course');

    return view('contacts.index', [
      'field' => 'first_name',
      'direction' => 'asc',
      'contacts' => \App\Models\Contact::latest()
        ->get(['id', 'first_name', 'last_name', 'email', 'status', 'company_id', 'created_at'])
    ]);
  }
}
