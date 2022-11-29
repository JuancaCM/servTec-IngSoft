<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use SebastianBergmann\CodeUnit\FunctionUnit;

class ClienteController extends Controller
{
    public function registrarCliente()
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
        return view('clientes.actualizarCliente', compact('cliente'));
    }

    public function getDatosCliente(Request $req)
    {
        try {
            $datosCliente = Cliente::where('rut', $req->rut)->first();
            if ($datosCliente) {
                return response()->json($datosCliente, 200);
            }
            return response()->json(null, 404);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function updateCliente($id, Request $req)
    {
        $cliente = Cliente::findOrFail($id);
        try {
            $rut = $req->input('rut');
            $name = $req->input('name');
            $contacto = $req->input('contacto');
            $correo = $req->input('correo');

            $cliente->rut = $rut;
            $cliente->nombre = $name;
            $cliente->contacto = $contacto;
            $cliente->correo = $correo;
            $cliente->save();

            return back()->with('success', true);
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('success', false);
        }
    }

    public function guardar(Request $req)
    {
        $esta = Cliente::where('rut', $req->input('rut'))->get();
        if (count($esta) != 0) {
            return back()->with('errorInsert', true);
        }

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

            return back()->with('insert', true);
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('errorInsert', false);
        }
    }
}
