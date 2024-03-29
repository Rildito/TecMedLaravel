<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpentRequest extends FormRequest
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
            "gasto" => ["required","numeric","regex:/^[\d]{0,8}(\.[\d]{1,2})?$/",'min:1'],
            "nro" => ["required", "string",'unique:spents,nro'],
            "nroFactura" => ["required", "string",'unique:spents,nroFactura'],
            "custodio" => ["required"],
            "descripcion" => ["required","string"],
        ];
    }

    public function messages()
    {
        return [
            "nro.required" => "El nro de vale es obligatorio",
            "nro.unique" => "Ya existe un numero de vale con ese registro",
            "nro.string" => "El nro de vale debe de ser una cadena de caracteres",
            "nroFactura.required" => "El nro de factura es obligatorio",
            "nroFactura.unique" => "Ya existe un numero de factura con ese registro",
            "nroFactura.string" => "El nro de factura debe de ser una cadena de caracteres",
            "descripcion.required" => "La descripcion es obligatoria",
            "descripcion.string" => "La descripcion debe de ser una cadena de caracteres",
            "gasto.required" => "El gasto es obligatorio",
            "gasto.numeric" => "El gasto debe de ser un numero",
            "gasto.regex" => "El gasto no tiene el formato correcto",
            "gasto.min" => "El gasto no puede ser 0 Bs.",
            "custodio" => "El custodio es requerido",
        ];
    }
}
