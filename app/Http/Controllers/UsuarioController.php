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
}
