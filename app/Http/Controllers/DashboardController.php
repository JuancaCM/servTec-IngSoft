<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Procedimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    function getDashboard()
    {
        $procedimientos = Procedimiento::with('equipo')
            ->with('usuario')
            ->with('estado')
            ->with('equipo.cliente')
            ->get();
        $estados = Estado::all();
        return view('dashboard', compact('procedimientos', 'estados'));
    }
    function showProc($id)
    {
        $procedimiento = Procedimiento::with('equipo')
            ->with('usuario')
            ->with('estado')
            ->with('equipo.cliente')
            ->get()
            ->where('id', '=', $id)
            ->first();
        return view('clientes/procedimiento', compact('procedimiento'));
    }
}
