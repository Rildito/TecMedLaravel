<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'ci' => ['required','string'],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ci.required' => 'El usuario es obligatorio',
            'password' => 'El password es obligatorio'
        ];
    }
}
