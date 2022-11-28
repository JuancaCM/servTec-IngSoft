<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Procedimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProcedimientoController extends Controller
{
    public function vistaProcedimiento()
    {
        return view('clientes.registroProcedimientos');
    }
    public function registroProcedimiento(Request $req)
    {
        $esta = Cliente::select('id')->where('rut', $req->input('rut'))->pluck('id');

        if(count($esta)==0)
        {
            $rut = $req->input('rut');
            $name = $req->input('nombre');
            $contacto = $req->input('contacto');
            $correo = $req->input('correo');

            $cliente = new Cliente();
            $cliente->rut = $rut;
            $cliente->nombre = $name;
            $cliente->contacto = $contacto;
            $cliente->correo = $correo;
            $cliente->save();
            //dd($cliente->id);
            $id = $cliente->id;
        }
        else
        {
            $id = $esta[0];
        }

        try {

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

            $equipo = new Equipo();
            $equipo->marca = $marca;
            $equipo->modelo = $modelo;
            $equipo->imei = $imei;
            $equipo->nota = $nota;
            $equipo->cliente_id = $id;
            $equipo->save();

            $procedimiento = new Procedimiento();
            $procedimiento->valor = $valor;
            $procedimiento->abono = $abono;
            $procedimiento->clave = $clave;
            $procedimiento->estado_id = $estado;
            $procedimiento->comentario = $reparacion;
            $procedimiento->retirado = $fechaRetiro;
            $procedimiento->equipo_id = $equipo->id;
            $procedimiento->estado_id = 1;
            $procedimiento->usuario_id = session('id');

            $procedimiento->save();

            DB::commit();

            return back()->with('success', true);
        } catch (\Throwable $th) {
            DB::rollback();
            //\Log::info($th->getMessage());
            return back()->with('success', false);
        }
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
