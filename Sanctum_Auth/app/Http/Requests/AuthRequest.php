<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
    return [
        'Name'  => ['required', 'string', 'min:3', 'max:255'],
        'email' => ['required', 'email','unique:universities'],
        'Password'=>['min:7','max:10','alpha_num','confirmed','string'],
        'Reg_No'=>['string','min:4','max:18'],
        'Dob'   => ['required','date_format:d-m-Y'],
        'Department'=>['min:3','string']

    ];
}
}

