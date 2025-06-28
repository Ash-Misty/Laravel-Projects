<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return
        ['register_no' => ['required', 'digits_between:4,10', 'numeric', 'unique:students,register_no'],
          'name'=>['required','min:3','string'],
            'department'=>['required','min:3'],
            'email'=>['email','required','unique:students'],
            'password'=>['min:6','required','alpha_num','confirmed']
        ];
    }
}
