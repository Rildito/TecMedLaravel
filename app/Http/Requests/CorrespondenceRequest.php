<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorrespondenceRequest extends FormRequest
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
            "unit_id" => ['string','required'],
            "nombre" => ['required','string'],
            "fechaCreacion" => ['date'],
            "hojaDeRuta" => ['required', 'string'],
            "descripcion" => ['required', 'string'],
            "documento" => ['required', 'file',],
            "estado" => ['string'],
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El nombre del documento es obligatorio',
            'nombre.unique' => 'Ya existe un registro con el nombre del documento',
            'fechaCreacion.required' => 'La fecha de creacion es obligatoria',
            'hojaDeRuta.required' => 'El identificador es obligatorio',
            'unit_id' => 'La unidad es obligatoria',
            'descripcion.required' => 'La descripcion es obligatoria',
            'documento.required' => 'El documento es obligatorio',
            'documento.file' => 'El documento debe ser un archivo'
        ];
    }
}
