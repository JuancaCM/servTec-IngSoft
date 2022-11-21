@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body ">
            @if (null != session('insert') && session('insert'))
                <div class="alert alert-success text-center">
                    Cliente registrado en la base de datos
                </div>
            @elseif (null != session('errorInsert') && session('errorInsert'))
                <div class="alert alert-danger text-center">
                    Ha ocurrido un error al registrar al cliente
                </div>
            @endif

            <form method="POST">
                @csrf
                <div class="text-center">
                    <label for="Registro" class="form-label text-dark">Registro de clientes</label>
                    <hr>
                </div>

                <div class="form-label mb-3">
                         <input name="rut" type="text" class="form-control" id="rut" placeholder="Rut"
                            aria-label="Rut" aria-describedby="basic-addon1" required>
                </div>

                <div class="form-label mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                            aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                        <input name="contacto" type="number" class="form-control" placeholder="Telefono"
                            aria-label="Contacto" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input name="correo" type="email" class="form-control" placeholder="Correo" aria-label="Correo">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                </div>

            </form>
        </div>
    </div>

@endsection
