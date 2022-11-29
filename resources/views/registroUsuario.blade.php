@extends('base')
@section('content')
    @if (null != session('success') && session('success'))
        <div class="mt-3 col-md-4 offset-md-4 border-left-primary shadow">
            <div class="alert alert-success text-center">
                Usuario creado exitosamente. Por favor revisar su bandeja de correo
            </div>
        </div>
    @elseif (null != session('success') && session('success'))
        <div class="mt-3 col-md-4 offset-md-4 border-left-primary shadow">
            <div class="alert alert-danger text-center">
                Ha ocurrido un error al crear alnNsgNYdSKu Usuario
            </div>
        </div>
    @endif
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body ">
            <form method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Nombre: </strong></span>
                    </div>
                    <div class="col-8"><input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingrese nombre del usuario"> </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Correo: </strong></span>
                    </div>
                    <div class="col-8"><input type="text" class="form-control" id="nombre" name="correo"
                            placeholder="Ingrese correo electrónico"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Rol: </strong></span>
                    </div>
                    <div class="col-8">
                        <select class="form-select" name="rol_id" aria-label="Select rol">
                            <option value="1">Administrador</option>
                            <option selected value="2">Operador</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid mt-3 gap-2 d-md-flex justify-content-md-end">
                    <a href='/listaUsuarios' class="btn btn-primary">Atrás</a>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
