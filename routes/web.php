<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('base');
});

Route::get('/registro',[ClienteController::class, 'formulario']);
Route::post('/registro',[ClienteController::class, 'guardar']);

Route::get('/login',[authController::class,'login']);
Route::post('/login',[authController::class,'loginUser']);

Route::get('/registroProcedimientos', function () {
    return view('clientes.registroProcedimientos');
});

Route::get('/procedimientos', function () {
    return view('clientes.listaProcedimientos');
});

Route::get('/clientes', function () {
    return view('clientes.listaClientes');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

