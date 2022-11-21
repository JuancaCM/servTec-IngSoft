<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeUnit\FunctionUnit;

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
    public function getClient($id, Request $req)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.actualizarCliente',compact('cliente'));
    }

    public function updateCliente($id, Request $req)
    {
        $cliente = Cliente::findOrFail($id);
        DB::beginTransaction();
        try{
            $rut = $req->input('rut');
            $name = $req->input('name');
            $contacto = $req->input('contacto');
            $correo = $req->input('correo');

            $cliente->rut = $rut;
            $cliente->nombre = $name;
            $cliente->contacto = $contacto;
            $cliente->correo = $correo;
            $cliente->save();
            DB::commit();

            return back()->with('success', true);
        }catch(\Throwable $th) {
            DB::rollback();
            return back()->with('success', false);
        }
    }

    public function guardar(Request $req)
    {
        $esta = Cliente::where('rut', $req->input('rut'))->get();
        if (count($esta)!= 0 ) {
            return back()->with('errorInsert', true);
        }

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
            return back()->with('errorInsert', false);
        }
    }
}
