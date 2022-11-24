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
                    <div class="col-8"><input type="date"  class="form-control" id="fecha"></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Rut: </strong></span></div>
                    <div class="col"><input type="text"  class="form-control" id="rut" placeholder="Rut del cliente"
                            ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Nombre: </strong></span></div>
                    <div class="col-8"><input type="text"  class="form-control" id="nombre" placeholder="Nombre cliente"
                            ></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Contacto: </strong></span></div>
                    <div class="col-8"><input type="text"   class="form-control" id="contacto" placeholder="Teléfono de contacto"
                            ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Correo: </strong></span></div>
                    <div class="col-8"><input type="text"   class="form-control" id="correo" placeholder="Correo cliente"
                            ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Marca: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="marca"  placeholder="Marca del equipo"
                            name='marca' ></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Modelo: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="modelo" placeholder="Modelo del equipo"
                            name="modelo" ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Imei: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="imei" placeholder="Imei del equipo"
                            name="imei" ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Nota de ingreso: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="nota" placeholder="Nota de ingreso del equipo"
                            name="nota" ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Valor: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="valor" placeholder="Valor de la reparación"
                            name="valor" ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Abono: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="abono" placeholder="Abono"
                            name="abono" ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Clave: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="clave" placeholder="Clave o password del equipo"
                            name="clave" ></div>
                </div>

                <div class="row mb-2">
                    <div class="col-4"><span><strong>Reparación: </strong></span></div>
                    <div class="col-8"><input type="text" class="form-control" id="reparacion" placeholder="Detalle reparación"
                            name="reparacion" ></div>
                </div>
                <div class="row mb-2">
                    <div class="col-4"><span><strong>Fecha de retiro: </strong></span></div>
                    <div class="col-8"><input type="date" class="form-control" id="fechaRetiro" placeholder="Fecha de retiro"
                            name="fechaRetiro" ></div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href='/clientes' class="btn btn-primary">Atrás</a>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </div>
        </div>
        </form>

            {{-- <form method="POST">
                @csrf
                <div class="text-center">
                    <label for="Registro" class="form-label text-dark">Registro de Procedimientos</label>
                    <hr>
                </div>

                <div class="form-label mb-3">
                    <input name="rut" type="text" class="form-control" id="rut" placeholder="Rut"
                        aria-label="Rut" aria-describedby="basic-addon1" required>
                </div>

                <div class="form-label mb-3">
                    <input name="name" type="text" class="form-control" id="nombre" placeholder="Nombre" aria-label="Nombre"
                        aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <input name="contacto" type="number" class="form-control" id="contacto" placeholder="Telefono" aria-label="Contacto"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input name="correo" type="email" class="form-control" id="correo" placeholder="Correo" aria-label="Correo">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="marca" placeholder="Marca"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="modelo" placeholder="Modelo"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="imei" placeholder="Imei"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="nota" placeholder="Nota"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input name="fechaIngreso" type="date" class="form-control" id="fecha" placeholder="Fecha de ingreso"
                        aria-label="Correo">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="marca" placeholder="Valor"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="abono" placeholder="Abono"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="form-label mb-3">
                    <input name="marcaModelo" type="text" class="form-control" id="clave" placeholder="Clave"
                        aria-label="marcaModelo" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <textarea name="comentarios" class="form-control" placeholder="Comentarios sobre el equipo recibido"
                        aria-label="With textarea"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                </div>

            </form> --}}
        </div>
    </div>
@endsection
