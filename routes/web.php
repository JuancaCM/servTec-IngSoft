<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base');
});

Route::get('/registro', function () {
    return view('clientes/registroClientes');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/procedimientos', function () {
    return view('clientes/listaProcedimientos');
});

Route::get('/clientes', function () {
    return view('clientes/listaClientes');
});
