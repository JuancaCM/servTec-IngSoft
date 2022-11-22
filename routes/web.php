<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Middleware\Middleware;
use App\Models\Procedimiento;
use Illuminate\Http\Request;

Route::middleware([Middleware::class])->group(function () {
    Route::get('/registro', [ClienteController::class, 'formulario']);
    Route::post('/registro', [ClienteController::class, 'guardar']);
    Route::get('/clientes', [ClienteController::class, 'showClients']);
    Route::get('/actualizarCliente/idCliente={id}', [ClienteController::class, 'getClient']);
    Route::post('/actualizarCliente/idCliente={id}', [ClienteController::class, 'updateCliente']);
    Route::get('/registroProcedimientos', function () {
        return view('clientes.registroProcedimientos');
    });
    Route::post('/registroProcedimientos/idProcedimiento={id}', [ProcedimientoController::class, 'registroProcedimiento']);
    Route::get('/dashboard', [DashboardController::class, 'getDashboard']);
    Route::get('/logout', function (Request $req) {
        $req->session()->flush();
        return redirect('/login');
    });
    Route::get('/dashboard/ot={id}', [DashboardController::class, 'showProc']);
    Route::post('/dashboard/ot={id}', [ProcedimientoController::class, 'updateProcedimiento']);
});

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [authController::class, 'login']);
Route::post('/login', [authController::class, 'loginUser']);
Route::get('/seguimiento', function () {
    return view('/publico/seguimiento');
});
