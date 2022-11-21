<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Middleware;
use Illuminate\Http\Request;

Route::middleware([Middleware::class])->group(function () {
    Route::get('/registro', [ClienteController::class, 'formulario']);
    Route::post('/registro', [ClienteController::class, 'guardar']);

    Route::get('/registroProcedimientos', function () {
        return view('clientes.registroProcedimientos');
    });
    Route::get('/actualizarCliente/{id}', [ClienteController::class, 'getClient']);
    Route::post('/actualizarCliente/{id}',[ClienteController::class, 'updateCliente']);

    Route::post('/registroProcedimientos'); // REVISAR CON CONTROLADOR?

    Route::get('/clientes', [ClienteController::class, 'showClients']);

    Route::get('/dashboard', [DashboardController::class, 'getDashboard']);

    Route::get('/logout', function (Request $req) {
        $req->session()->flush();
        return redirect('/login');
    });

    Route::get('/dashboard/ot={id}', [DashboardController::class, 'showProc']);
});

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [authController::class, 'login']);
Route::post('/login', [authController::class, 'loginUser']);
Route::get('/seguimiento', function () {
    return view('/publico/seguimiento');
});
