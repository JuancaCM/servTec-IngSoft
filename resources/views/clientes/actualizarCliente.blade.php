@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body ">
            @if (null != session('success') && session('success'))
                <div class="alert alert-success text-center">
                    Cliente se ha modificado correctamente
                </div>
            @elseif (null != session('success') && session('success'))
                <div class="alert alert-danger text-center">
                    Ha ocurrido un error al modificar al cliente
                </div>
            @endif

            <form method="POST">
                @csrf
                <div class="text-center">
                    <label for="Registro" class="form-label text-dark">Actualizar cliente ID: {{ $cliente->id }}</label>
                    <hr>
                </div>
                <div class="row mb-2">
                    <div class="col-4 mb-auto"><span><strong>Rut : </strong></span></div>
                    <div class="col-8 mb-auto">
                        <div class="form-label mb-3">
                            <input name="rut" type="text" class="form-control" id="rut"
                                value="{{ $cliente->rut }}" placeholder="RUT" aria-label="Rut"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 mb-auto"><span><strong>Nombre : </strong></span></div>
                    <div class="col-8 mb-auto">
                        <div class="form-label mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Nombre"
                                value="{{ $cliente->nombre }}" aria-label="Nombre" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 mb-auto"><span><strong>Teléfono : </strong></span></div>
                    <div class="col-8">
                        <div class="form-label mb-3">
                            <input name="contacto" type="number" class="form-control" placeholder="Telefono"
                                value="{{ $cliente->contacto }}" aria-label="Contacto" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row" mb-2>
                    <div class="col-4 mb-auto"><span><strong>Correo : </strong></span></div>
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <input name="correo" type="email" class="form-control" placeholder="Correo"
                                value="{{ $cliente->correo }}" aria-label="Correo">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href='{{ url()->previous() }}' class="btn btn-primary">Atrás</a>
                        <button class="btn btn-primary" type="submit">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
