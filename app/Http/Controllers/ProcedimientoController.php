<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProcedimientoController extends Controller
{
    public function registrarProcedimiento(Request $req)
    {
        $id = 1;
        //  TODO : Ver si se puede devolver el último ID para mostrar en el formulario
        return view('clientes.registroProcedimientos')->with($id);
    }
    public function updateProcedimiento($id, Request $req)
    {
        $procedimiento = Procedimiento::where('id',$id)->first();
        $equipo = $procedimiento->equipo;
        DB::beginTransaction();
        try {
            //$procedimiento = Procedimiento::findOrFail($id);

            $marca = $req->input('marca');
            $modelo = $req->input('modelo');
            $imei = $req->input('imei');
            $nota = $req->input('nota');
            $valor = $req->input('valor');
            $abono = $req->input('abono');
            $clave = $req->input('clave');
            $estado = $req->input('estado');
            $reparacion = $req->input('reparacion');
            $fechaRetiro = $req->input('fechaRetiro');

            $equipo->marca = $marca;
            $equipo->modelo = $modelo;
            $equipo->imei = $imei;
            $equipo->nota = $nota;
            $equipo->save();

            $procedimiento->valor = $valor;
            $procedimiento->abono = $abono;
            $procedimiento->clave = $clave;
            $procedimiento->estado_id = $estado;
            $procedimiento->comentario = $reparacion;
            $procedimiento->retirado = $fechaRetiro;

            $procedimiento->save();

            DB::commit();

            return back()->with('success', true);
        } catch (\Throwable $th) {
            DB::rollback();
            //\Log::info($th->getMessage());
            return back()->with('success', false);
        }
    }
}
