@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body ">

            @if (null != session('insert') && session('insert'))
                <div class="alert alert-success text-center">
                    El procedimiento se ha registrado correctamente
                </div>
            @elseif (null != session('insert') && !session('insert'))
                <div class="alert alert-danger text-center">
                    Ha ocurrido un error al registrar el procedimiento
                </div>
            @endif

            <h4 class="card-title text-center">Nueva orden de trabajo</h4>

            <form id="registroProcedimiento" method="POST">
                @csrf
                <div class="row mb-2 mt-4">
                    <div class="col-4">
                        <span><strong>Fecha de ingreso: </strong></span>
                    </div>
                    <div class="col-8"><input type="date" class="form-control" id="fecha"></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Rut: </strong></span></div>
                    <div class="col"><input type="text" class="form-control" id="rut"
                            placeholder="Rut del cliente"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Nombre: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="nombre"
                            placeholder="Nombre cliente"></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Contacto: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="contacto"
                            placeholder="Teléfono de contacto"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Correo: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="correo"
                            placeholder="Correo cliente"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Marca: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="marca"
                            placeholder="Marca del equipo" name='marca'></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Modelo: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="modelo"
                            placeholder="Modelo del equipo" name="modelo"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Imei: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="imei"
                            placeholder="Imei del equipo" name="imei"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Nota de ingreso: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="nota"
                            placeholder="Nota de ingreso del equipo" name="nota"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Valor: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="valor"
                            placeholder="Valor de la reparación" name="valor"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Abono: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="abono" placeholder="Abono"
                            name="abono"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Clave: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="clave"
                            placeholder="Clave o password del equipo" name="clave"></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Reparación: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="reparacion"
                            placeholder="Detalle reparación" name="reparacion"></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Fecha de retiro: </strong></span></div>
                    <div class="col-8"><input type="date" class="form-control" id="fechaRetiro"
                            placeholder="Fecha de retiro" name="fechaRetiro"></div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href='/clientes' class="btn btn-primary">Atrás</a>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </div>
        </div>
        </form>
    </div>
@endsection
