<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base');
});

Route::get('/registro',[ClienteController::class, 'formulario']);
Route::post('/registro',[ClienteController::class, 'guardar']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/procedimientos', function () {
    return view('clientes/listaProcedimientos');
});

Route::get('/clientes', function () {
    return view('clientes/listaClientes');
});
