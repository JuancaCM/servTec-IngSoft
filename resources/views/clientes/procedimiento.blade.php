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
                            Clave:
                        </th>
                        <td>
                            {{ $procedimiento->clave }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Comentario:
                        </th>
                        <td>
                            {{ $procedimiento->comentario }}
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
