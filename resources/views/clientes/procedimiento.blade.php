@extends('base')

@section('content')
    <div class="card mt-3 col-md-6 offset-md-3 border-left-primary shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <h3><strong> Orden de trabajo N°: {{ $procedimiento->id }}</strong></h3>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            Fecha:
                        </th>
                        <td>
                            {{ $procedimiento->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nombre:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->cliente->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Rut:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->cliente->rut }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Contacto:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->cliente->contacto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Correo:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->cliente->correo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Marca:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->marca }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Modelo:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->modelo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Imei:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->imei }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nota de ingreso:
                        </th>
                        <td>
                            {{ $procedimiento->equipo->nota }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Valor:
                        </th>
                        <td>
                            {{ $procedimiento->valor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Abono:
                        </th>
                        <td>
                            {{ $procedimiento->abono }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Clave:
                        </th>
                        <td>
                            {{ $procedimiento->clave }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Estado:
                        </th>
                        <td>
                            {{ $procedimiento->estado->estado }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Reparación:
                        </th>
                        <td>
                            {{ $procedimiento->comentario }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Fecha de retiro:
                        </th>
                        <td>
                            {{ $procedimiento->retirado }}
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href='{{ url()->previous() }}' class="btn btn-primary">Atrás</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarCampos">
                    Editar
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="editarCampos" tabindex="-1" aria-labelledby="modalEditarCampos" aria-hidden="true"
                data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar orden de trabajo N° :
                                {{ $procedimiento->id }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="row mb-2">
                                    <div class="col">
                                        <span><strong>Fecha de ingreso: </strong></span>
                                    </div>
                                    <div class="col"><input type="date" readonly class="form-control" id="fecha"
                                            value={{ $procedimiento->created_at }}></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Nombre: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="nombre"
                                            value="{{ $procedimiento->equipo->cliente->nombre }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Rut: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="rut"
                                            value="{{ $procedimiento->equipo->cliente->rut }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Contacto: </strong></span></div>
                                    <div class="col"><input type="number" class="form-control" id="contacto"
                                            value="{{ $procedimiento->equipo->cliente->contacto }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Correo: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="correo"
                                            value="{{ $procedimiento->equipo->cliente->correo }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Marca: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="marca"
                                            value="{{ $procedimiento->equipo->marca }}"></div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col"><span><strong>Modelo: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="modelo"
                                            value="{{ $procedimiento->equipo->modelo }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Imei: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="imei"
                                            value="{{ $procedimiento->equipo->imei }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Nota de ingreso: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="nota"
                                            value="{{ $procedimiento->equipo->nota }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Valor: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="valor"
                                            value="{{ $procedimiento->valor }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Abono: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="abono"
                                            value="{{ $procedimiento->abono }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Clave: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="clave"
                                            value="{{ $procedimiento->clave }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Estado: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="estado"
                                            value="{{ $procedimiento->estado->estado }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Reparación: </strong></span></div>
                                    <div class="col"><input type="text" class="form-control" id="reparacion"
                                            value="{{ $procedimiento->comentario }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col"><span><strong>Fecha de retiro: </strong></span></div>
                                    <div class="col"><input type="date" class="form-control" id="fechaRetiro"
                                            value={{ $procedimiento->equipo->nota }}></div>
                                </div>
                        </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
