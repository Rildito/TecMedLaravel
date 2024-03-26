<?php

namespace App\Http\Controllers;

use App\Models\MoneyBox;
use App\Models\Recharge;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RechargeController extends Controller
{
    public function getRecharge()
    {
        return Recharge::where('estado', 'iniciado')->first();
    }

    public function getRecharges()
    {
    }

    public function createRecharge(Request $request)
    {
        DB::beginTransaction();
        try {
            $money_box = MoneyBox::find(1);
            Recharge::create([
                'estado' => 'activo',
                'money_box_id' => 1,
                'montoRecarga' => $request->monto,
                'fechaRecarga' => Carbon::now(),
            ]);
            $money_box->monto = $money_box->monto + $request->monto;
            $money_box->save();

            DB::commit();
            return [
                'message' => 'Reembolso creado'
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $th->getMessage()]
            ], 422);
        }
    }
}
