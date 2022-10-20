<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecnología SC - Sistema de registro vBeta 0.1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-primary bg-light">
    <a class="navbar-brand ml-3" href="/">Tecnología SC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/registro">Registro de clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/procedimientos">Procedimientos </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clientes">Clientes </a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
