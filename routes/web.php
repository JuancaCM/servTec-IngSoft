<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Middleware;
use App\Models\Procedimiento;
use Illuminate\Http\Request;

Route::middleware([Middleware::class])->group( function () {
    Route::get('/registro', [ClienteController::class, 'formulario']);
    Route::post('/registro', [ClienteController::class, 'guardar']);

    Route::get('/registroProcedimientos', function () {
        return view('clientes.registroProcedimientos');
    });

    Route::get('/procedimientos', function () {
        return view('clientes.listaProcedimientos');
    });

    Route::get('/clientes', function () {
        return view('clientes.listaClientes');
    });

    Route::get('/dashboard', [DashboardController::class,'getDashboard']);

    Route::get('/logout', function (Request $req) {
        $req->session()->flush();;
        return redirect('/login');
    });

    Route::get('/dashboard/{id}', [DashboardController::class,'showProc']);

});

Route::get('/', function () {
    return view('base');
});

Route::get('/login', [authController::class, 'login']);
Route::post('/login', [authController::class, 'loginUser']);
