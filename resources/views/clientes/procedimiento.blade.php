@extends('base')

@section('content')
    @if (null != session('success') && session('success'))
        <div class="alert alert-success text-center">
            Procedimiento actualizado correctamente
        </div>
    @elseif (null != session('success') && session('success'))
        <div class="alert alert-danger text-center">
            Ha ocurrido un error al actualizar el procedimiento OT
        </div>
    @endif
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
                <a href='/dashboard' class="btn btn-primary">Atrás</a>
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
                            <h1 class="modal-title fs-5" id="tituloModal">Editar orden de trabajo N° :
                                {{ $procedimiento->id }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="updateProcedimiento" method="POST">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-4">
                                        <span><strong>Fecha de ingreso: </strong></span>
                                    </div>
                                    <div class="col-8"><input type="date" disabled readonly class="form-control" id="fecha"
                                            value={{ $procedimiento->created_at }}></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Nombre: </strong></span></div>
                                    <div class="col-8"><input type="text" disabled readonly class="form-control" id="nombre"
                                            value="{{ $procedimiento->equipo->cliente->nombre }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Rut: </strong></span></div>
                                    <div class="col"><input type="text" disabled readonly class="form-control" id="rut"
                                            value="{{ $procedimiento->equipo->cliente->rut }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Contacto: </strong></span></div>
                                    <div class="col-8"><input type="text" disabled readonly class="form-control" id="contacto"
                                            value="{{ $procedimiento->equipo->cliente->contacto }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Correo: </strong></span></div>
                                    <div class="col-8"><input type="text" disabled readonly class="form-control" id="correo"
                                            value="{{ $procedimiento->equipo->cliente->correo }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Marca: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="marca"
                                            name='marca' value="{{ $procedimiento->equipo->marca }}"></div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Modelo: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="modelo"
                                            name="modelo" value="{{ $procedimiento->equipo->modelo }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Imei: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="imei"
                                            name="imei" value="{{ $procedimiento->equipo->imei }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Nota de ingreso: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="nota"
                                            name="nota" value="{{ $procedimiento->equipo->nota }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Valor: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="valor"
                                            name="valor" value="{{ $procedimiento->valor }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Abono: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="abono"
                                            name="abono" value="{{ $procedimiento->abono }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Clave: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="clave"
                                            name="clave" value="{{ $procedimiento->clave }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Estado: </strong></span></div>
                                    <div class="col-8"><select class="form-select" name="estado"
                                            aria-label="Default select example">
                                            @foreach ($estados as $e)
                                                @if ($e->estado == $procedimiento->estado->estado)
                                                    <option selected value="{{ $e->id }}">{{ $e->estado }}
                                                    </option>
                                                @else
                                                    <option value="{{ $e->id }}">{{ $e->estado }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Reparación: </strong></span></div>
                                    <div class="col-8"><input type="text" class="form-control" id="reparacion"
                                            name="reparacion" value="{{ $procedimiento->comentario }}"></div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-4"><span><strong>Fecha de retiro: </strong></span></div>
                                    <div class="col-8"><input type="date" class="form-control" id="fechaRetiro"
                                            name="fechaRetiro" value={{ $procedimiento->retirado }}></div>
                                </div>
                        </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                            <button type="submit" id="guardar" class="btn btn-primary"
                                data-bs-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#guardar').on('click', function(e) {
                $('#updateProcedimiento').submit();
            });
        });
    </script>
@endsection
