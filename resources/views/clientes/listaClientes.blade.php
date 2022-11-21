@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-5 col-md-8 shadow">
            <div class="card-body">
                <table id='Tabla1' class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre cliente</th>
                            <th scope="col">RUT</th>
                            <th scope="col">Contacto</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->nombre }}</td>
                                <td>{{ $c->rut }}</td>
                                <td>{{ $c->contacto }}</td>
                                <td>{{ $c->correo }}</td>
                                <td>
                                    <a href='/actualizarCliente/{{ $c->id }}' class="btn btn-dark">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#Tabla1').DataTable({
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-CL.json'
                    }
                });
            });
        </script>
    @endsection
