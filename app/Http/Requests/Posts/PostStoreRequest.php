<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
      'title' => 'required|min:10',
      'intro' => 'required|min:15',
      'content' => 'required|min:50',
      'photo_path' => 'image|File::image()->atLeast(1024)->smallerThan(12 * 1024)'
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
