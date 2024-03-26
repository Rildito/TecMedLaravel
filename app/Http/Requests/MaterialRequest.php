<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
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
            "nombre" => ["required", "string","unique:materials,nombre"],
            "cantidad" => ["required", "integer"],
            "estado" => ["required"],
            "descripcion" => ["required", "string"],
            "imagen" => ["required","file"],
        ];
    }

    public function messages()
    {
        return [
            "nombre.required" => "El nombre es requerido",
            "nombre.unique" => "Ya existe un registro con ese nombre",
            "estado.required" => "El estado es requerido",
            "descripcion.required" => "La descripcion es requerida",
            "imagen.required" => "La imagen es requerida",
            "imagen.file" => "La imagen debe de ser una imagen"
        ];
    }
}
