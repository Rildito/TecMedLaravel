<?php

namespace App\Http\Controllers;

use App\Events\NewResponseEvent;
use App\Http\Requests\SpentRequest;
use App\Http\Resources\SpentCollection;
use App\Models\MoneyBox;
use App\Models\Spent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpentController extends Controller
{
    public function getSpents()
    {
        return new SpentCollection(Spent::with('money_box')->get());
    }

    public function getSpentId($id)
    {
        return Spent::with('money_box')->with('interested')->find($id);
    }

    public function getUltimateSpent()
    {
        $spents = Spent::with('money_box')->with('interested')->get();
        $nro = 1;
        if (count($spents) > 0) {
            $lastSpent = $spents->last();
            $nro = $lastSpent->nro + 1;
        }

        return [
            'nro' => strval($nro)
        ];
    }

    public function createSpent(SpentRequest $request)
    {
        DB::beginTransaction();

        try {
            $moneyBox = MoneyBox::find(1);
            $data = $request->validated();

            if ($moneyBox->monto < $request->gasto) {
                return response([
                    'errors' => ['El gasto excede a el dinero sobrante en la caja chica']
                ], 422);
            }

            $spent = Spent::create([
                "money_boxes_id" => '1',
                "nro" => $data['nro'],
                "fechaCreacion" => Carbon::now(),
                "nroFactura" => $data['nroFactura'] === 'Sin factura' ? '' : $data['nroFactura'],
                "descripcion" => $data['descripcion'],
                "gasto" => $data['gasto'],
                "interested_id" => $data['custodio'],
                "ingreso" => $request['ingreso'] !== '' ? $request['ingreso'] : ''
            ]);

            $moneyBox->monto = $moneyBox->monto - $spent->gasto;
            $moneyBox->save();
            DB::commit();
            return [
                "message" => "Gasto creado correctamente",
                "gasto" => $spent
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $th->getMessage()]
            ], 422);
        }
    }

    public function editSpent(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                "gasto" => ["required", "numeric", "regex:/^[\d]{0,8}(\.[\d]{1,2})?$/"],
                "nro" => ["required", "string", 'unique:spents,nro,' . $id],
                "nroFactura" => ["required", "string", 'unique:spents,nroFactura,' . $id],
                "custodio" => ["required"],
                "descripcion" => ["required", "string"],
            ], [
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
                "custodio" => "El custodio es requerido",
            ]);

            $moneyBox = MoneyBox::find(1);
            // if ($moneyBox->monto < $request->gasto) {
            //     return response([
            //         'errors' => ['El gasto excede a el dinero sobrante en la caja chica']
            //     ], 422);
            // }

            $spent = Spent::find($id);

            $spent->descripcion = $request->descripcion;
            $spent->interested_id = $request->custodio;
            $spent->gasto = $request->gasto;
            $spent->nroFactura = null;
            if ($request->nroFactura !== 'Sin factura') {
                $spent->nroFactura = $request->nroFactura;
            }
            $spent->nro = $request->nro;
            if ($request->ingreso !== '') {
                if ($spent->ingreso !== '0.00') {
                    $moneyBox->monto -= $spent->ingreso;
                }
                $spent->ingreso = $request->ingreso;
                $moneyBox->monto += $spent->ingreso;
            }

            $spent->save();
            $moneyBox->save();
            DB::commit();
            return [
                "message" => "Gasto editado correctamente"
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $th->getMessage()]
            ], 422);
        }
    }

    public function deleteSpent($id)
    {
        DB::beginTransaction();
        try {
            $moneyBox = MoneyBox::find(1);
            $spent = Spent::find($id);
            $moneyBox->monto = $spent->gasto + $moneyBox->monto;
            $moneyBox->save();
            $spent->delete();

            DB::commit();
            return [
                "message" => "Gasto eliminado correctamente"
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $th->getMessage()]
            ], 422);
        }
    }
}
