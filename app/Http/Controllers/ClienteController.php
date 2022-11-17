<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function formulario()
    {
        return view('clientes.registroClientes');
    }

    public function showClients()
    {
        $clientes = Cliente::all();
        return view('clientes.listaClientes', compact('clientes'));
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $contacto = $req->input('contacto');
            $correo = $req->input('correo');

            $user = new Cliente();
            $user->rut = $rut;
            $user->nombre = $name;
            $user->contacto = $contacto;
            $user->correo = $correo;

            $user->save();
            DB::commit();

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('insert', false);
        }
    }
}
