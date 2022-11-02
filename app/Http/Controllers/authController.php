<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class authController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginUser(Request $req)
    {
       $usuario = Usuario::where("correo","=",$req->usuario)->first();
       if($usuario == null)
       {
        return back()->with("Error","Usuario o contraseña incorrecta");
       }
       $password = $usuario->password;
       if(!password_verify($req->password,$password))
       {
        // Mostrar error
        return back()->with("Error","Usuario o contraseña incorrecta");
       }
       session(['id' => $usuario->id]);
       session(['rol_id' => $usuario->rol_id]);
       session(['nombre' => $usuario->nombre]);
       return redirect('dashboard');

    }
}
