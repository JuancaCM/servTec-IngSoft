@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body">
            @if (session("Error"))
                <div class="alert alert-danger" role="alert">
                   {{session("Error")}}
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
@endsection
