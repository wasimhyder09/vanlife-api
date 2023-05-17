<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVanRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'name' => [$this->isPostRequest(), 'max:255'],
      'rate' => [$this->isPostRequest(), 'numeric', 'min:10', 'max:1000'],
      'category' => [$this->isPostRequest(), 'max:255'],
      'description' => [$this->isPostRequest()],
      'owner' => [$this->isPostRequest(), 'numeric'],
      'image' => [$this->isPostRequest()]
    ];
  }

  private function isPostRequest() {
    return request()->isMethod('post') ? 'required' : 'sometimes';
  }
}
