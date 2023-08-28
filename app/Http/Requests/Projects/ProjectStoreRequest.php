<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectStoreRequest extends FormRequest
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
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required|min:10',

      'description' => 'nullable|min:50',

      'start_date' => 'required|date',

      'end_date' => 'required|date|after_or_equal:start_date',

      'contact_id' => 'required|exists:contacts,id',

      'documents.*' => 'nullable|mimes:jpg,jpeg,png,gif,pdf,doc,docx,xls,xlsx',

      'status' => [
        'nullable',
        Rule::in(['failed', 'completed', 'cancelled', 'processing'])
      ],
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Type in project\'s name',
      'name.min' => 'The name may not be less than :min characters',

      'description.min' => 'A project can\'t be described in less than :min characters',

      'start_date.required' => 'Pick a starting date for the project',
      'start_date.date' => 'The supplied value is not a valid date',

      'end_date.required' => 'Pick an ending date for the project',
      'end_date.date' => 'The supplied value is not a valid date',
      'end_date.after_or_equal' => 'The deadline cannot be behind the start date',

      'contact_id.required' => 'Pick a contact person for the project',
      'contact_id.exists' => 'The contact does not work for the selected company',

      'documents.mimes' => 'The files must be of JPEG, PNG, GIF, PDF, DOC, DOCX, XLS, or XLSX type.',

      'status.in' => 'The project status is invalid',
    ];
  }
}
