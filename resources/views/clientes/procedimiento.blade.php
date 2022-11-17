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
            <div class="modal fade" id="editarCampos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar orden de trabajo N° :
                                {{ $procedimiento->id }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--
                                    AÑADIR FORMULARIO
                                -->
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Descartar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
