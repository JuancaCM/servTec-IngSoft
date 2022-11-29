<?php

namespace App\Http\Controllers;

use App\Mail\ResetearPassword;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


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
            $usuario->rol_id = $req->rol_id;
            $usuario->save();
            return back()->with('success', true);
        } catch (\Throwable $th) {
            return back()->with('success', false);
        }
    }
    public function viewProfile()
    {
        $usuario = Usuario::where('id', session('id'))->first();
        return view('editProfile', compact('usuario'));
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
    public function registrarUsuario(Request $req)
    {
        try {
            $esta = Usuario::where('correo',$req->input('correo'))->get();
            if(count($esta)!= 0)
            {
                return back()->with('success', false);
            }
            $nombre = $req->nombre;
            $correo = $req->correo;
            $rol_id = $req->rol_id;

            $usuario = new Usuario();
            $usuario->nombre = $nombre;
            $usuario->correo = $correo;
            $usuario->rol_id = $rol_id;
            $password = Str::random(10);
            $usuario->password = Hash::make($password);
            Mail::to($correo)->send(new ResetearPassword($correo,$password));
            $usuario->save();

            return back()->with('success', true);
        } catch (\Throwable $th) {
            return back()->with('success', false);
        }
    }
    public function vistaRegistroUsuario()
    {
        return view('registroUsuario');
    }
}
