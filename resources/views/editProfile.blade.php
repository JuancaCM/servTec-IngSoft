@extends('base')
@section('content')
    @if (null != session('success') && session('success'))
        <div class="mt-3 col-md-4 offset-md-4 border-left-primary shadow">
            <div class="alert alert-success text-center">
                Perfil actualizado correctamente
            </div>
        </div>
    @elseif (null != session('success') && session('success'))
        <div class="mt-3 col-md-4 offset-md-4 border-left-primary shadow">
            <div class="alert alert-danger text-center">
                Ha ocurrido un error al actualizar el perfil
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
                            value="{{ $usuario->nombre }}"> </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Correo: </strong></span>
                    </div>
                    <div class="col-8"><input type="text" class="form-control" id="correo" name="correo"
                            value="{{ $usuario->correo }}"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Contraseña anterior: </strong></span>
                    </div>
                    <div class="col-8"><input type="password" class="form-control" id="oldPassword" name="oldPassword"
                            placeholder="Ingrese password"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Contraseña nueva: </strong></span>
                    </div>
                    <div class="col-8"><input type="password" class="form-control" id="newPassword" name="newPassword"
                            placeholder="Ingrese nueva password"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <span><strong>Confirmar contraseña nueva: </strong></span>
                    </div>
                    <div class="col-8"><input type="password" class="form-control" id="newPassword2" name="newPassword2"
                            placeholder="Confirmar nueva password"></div>
                </div>
                <div class="d-grid mt-3 gap-2 d-md-flex justify-content-md-end">
                    <a href='/dashboard' class="btn btn-primary">Atrás</a>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
