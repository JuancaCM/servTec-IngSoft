<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecnología SC - Sistema de registro vBeta 0.1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<div class=text-center>
    <img src="/img/logo.png" alt="">
</div>
<div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
    <div class="card-body">
        @if (session('Error'))
            <div class="alert alert-danger" role="alert">
                {{ session('Error') }}
            </div>
        @endif
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="Usuario" class="form-label">E-mail</label>
                <input type="email" name="usuario" class="form-control">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" id="Password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
</div>
