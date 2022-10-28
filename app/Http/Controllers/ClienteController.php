<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function formulario(){
        return view('clientes.registroClientes');
    }

    public function guardar(Request $req)
    {
        DB::beginTransaction();
        try{
            $rut = $req->input('rut');
            $name = $req->input('name');
            $contacto = $req->input('contacto');
            $correo = $req->input('correo');

            $user = new Usuario();
            $user->rut = $rut;
            $user-> pass = bcrypt('1234');
            $user->name = $name;
            $user->contacto = $contacto;
            $user->correo = $correo;
            $user->role_id = 2;

            $user->save();
            $userId = $user->id;

            $cliente = new Cliente();
            $cliente->save();

            DB::commit();

            return back()->with('insert', true);

        }   catch (\Throwable $th) {
            DB::rollback();
            return back()->with('insert', false);
        }
    }
}
