<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|email:rns',
      'company_id' => 'required|exists:companies,id',
    ];
  }

  public function messages()
  {
    return [
      'title.required' => 'Provide a title for the post',
      'intro.required' => 'Provide an overview of the post',
      'content.required' => 'Post content cannot be empty'
    ];
  }
}
