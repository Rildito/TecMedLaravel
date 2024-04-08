<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Http\Resources\UnitCollection;
use App\Models\Correspondence;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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

        DB::beginTransaction();
        try {
            
            $unit = Unit::find($id);
            Correspondence::where('unit_id', $unit['id'])->update(['unit_id' => null]);
            $unit->delete();
            DB::commit();
            return [
                "message" => "Unidad eliminada correctamente"
            ];
        } catch (\Throwable $e) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $e->getMessage()]
            ], 422);
        }
       
    }
}
