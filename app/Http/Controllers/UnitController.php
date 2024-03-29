<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Http\Resources\UnitCollection;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function getUnitsSelected($unidad) {
        return Unit::where('area','=',$unidad)->get();
    }

    public function getUnits() {
        return new UnitCollection(Unit::all());
    }

    public function getUnit($id) {
        return Unit::find($id);
    }

    public function createUnit (UnitRequest $request) {
        $data = $request->validated();
        Unit::create([
            'nombre' => $data['nombre'],
            'area' => $data['area']
        ]);

        return [
            "message" => "Unidad creada correctamente"
        ];
    }

    public function editUnit ($id, Request $request) {
        $request->validate([
            'nombre' => ['required','unique:units,nombre,'.$id],
            'area' => ['required']
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.unique' => 'Ya existe un nombre con ese registro',
            'area' => 'El area es obligatoria'
        ]);
        $unit = Unit::find($id);
        $unit->nombre = $request->nombre;
        $unit->area = $request->area;
        $unit->save();
        return [
            "message" => "Unidad editada correctamente"
        ];
    }

    public function deleteunit ($id) {
        
        $unit = Unit::find($id);
        $unit->delete();
        return [
            "message" => "Unidad eliminada correctamente"
        ];
    }
}
