<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterestedRequest extends FormRequest
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
            'nombreCompleto' => ['required', 'string', 'unique:interesteds,nombreCompleto']
        ];
    }

    public function messages()
    {
        return [
            'nombreCompleto.required' => "El nombre es obligatorio",
            'nombreCompleto.unique' => "Ya existe un registro con ese nombre",
        ];
    }
}
