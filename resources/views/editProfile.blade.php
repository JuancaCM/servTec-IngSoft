@extends('base')
@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body ">
            <form method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Nombre: </strong></span>
                    </div>
                    <div class="col-8"><input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{$usuario->nombre}}"> </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Correo: </strong></span>
                    </div>
                    <div class="col-8"><input type="text" class="form-control" id="nombre" name="correo"
                            value="{{$usuario->correo}}"></div>
                </div>
                <div class="d-grid mt-3 gap-2 d-md-flex justify-content-md-end">
                    <a href='/clientes' class="btn btn-primary">Atrás</a>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
