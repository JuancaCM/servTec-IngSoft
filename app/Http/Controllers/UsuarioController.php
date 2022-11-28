<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsuarioController extends Controller
{
    public function showUsers()
    {
        // TRAER A TODOS MENOS AL USUARIO DE LA SESION
        $usuarios = Usuario::all();

        return view('listaUsuarios', compact('usuarios'));
    }
    public function updateUsuario(Request $req)
    {
        try {
            $usuario = Usuario::where('id', $req->id)->first();
            $usuario->nombre = $req->nombre;
            $usuario->correo = $req->correo;
            $usuario->save();
            return back()->with('success', true);
        } catch (\Throwable $th) {
            return back()->with('success', false);
        }
    }
    public function viewProfile()
    {
        $usuario = Usuario::where('id',session("id"))->first();
        return view('editProfile',compact ('usuario'));
    }
    public function editProfile(Request $req)
    {

        try {
            $nombre = $req->nombre;
            $correo = $req->correo;

            $usuario = Usuario::where('id', session('id'))->first();
            $usuario->nombre = $nombre;
            $usuario->correo = $correo;
            $usuario->save();
            return back()->with('success', true);
        } catch (\Throwable $th) {
            return back()->with('success', false);
        }
    }
}
