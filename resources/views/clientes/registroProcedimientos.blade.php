@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body ">

            @if (null != session('insert') && session('insert'))
                <div class="alert alert-success text-center">
                    Cliente registrado en la base de datos
                </div>
            @elseif (null != session('insert') && !session('insert'))
                <div class="alert alert-danger text-center">
                    Ha ocurrido un error al registrar al cliente
                </div>
            @endif

            <form method="POST">
                @csrf
                <div class="text-center">
                    <label for="Registro" class="form-label text-dark">Registro de Procedimientos</label>
                    <hr>
                </div>

                <div class="form-label mb-3">
                    <span class="text" </span>
                        <input name="rutCliente" type="text" class="form-control" placeholder="Rut"
                            aria-label="Rut cliente" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <span class="text" </span>
                        <input name="marcaModelo" type="text" class="form-control"
                            placeholder="Marca y modelo de telefono" aria-label="marcaModelo"
                            aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input name="fechaIngreso" type="text" class="form-control" placeholder="Fecha de ingreso (dd-MM-yy)"
                        aria-label="Correo">
                </div>

                <div class="input-group mb-3">
                    <textarea name="comentarios" class="form-control" placeholder="Comentarios sobre el equipo recibido" aria-label="With textarea"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
