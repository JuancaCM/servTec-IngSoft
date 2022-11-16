<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProcedimientoController extends Controller
{
    public function guardar(Request $req){
        DB::beginTransaction();
        try{
            $rut = $req->input('rutCliente')
        }
    }
}
