<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

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
        return [
            'name' => ['required', 'string'],
            'app' => ['required', 'string'],
            'apm' => ['required', 'string'],
            'date' => ['required', 'date'],
            'ci' => ['required', 'string', 'unique:users,ci'],
            'ru' => ['required', 'string', 'unique:students,ru'],
            'mencion' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'tipo' => ['required'],
            'perfil' => ['required', 'file'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->symbols()->numbers()
            ]

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'app.required' => 'El apellido pat es obligatorio',
            'apm.required' => 'El apellido mat es obligatorio',
            'date.required' => 'La fecha de nacimiento es obligatorio',
            'ci.required' => 'El carnet es obligatorio',
            'ci.unique' => 'Ya existe un carnet con ese registro escriba otro',
            'ru.required' => 'El registro universitario es obligatorio',
            'ru.unique' => 'Ya existe un registro universitario con ese registro escriba otro',
            'mencion.required' => 'La mencion es obligatoria',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email no tiene un formato valido',
            'email.unique' => 'Ya existe un email con ese registro escriba otro',
            'perfil.required' => 'El perfil es obligatorio',
            'password' => 'El password debe contener al menos 8 caracteres, un simbolo y un número'
        ];
    }
}
