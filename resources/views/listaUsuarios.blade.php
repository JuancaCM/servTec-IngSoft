@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-5 col-md-8 shadow">
            <div class="card-body">
                <table id='Tabla1' class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- TODO: IMP. password recover -->
                        @foreach ($usuarios as $u)
                            <tr>
                                <td>{{ $u->id}}</td>
                                <td>{{ $u->nombre }}</td>
                                <td>{{ $u->correo }}</td>
                                {{-- <td>{{ $u->rol_id }}</td> --}}
                                @if( $u->rol_id == 1)
                                    <td>Administrador</td>
                                @else
                                    <td>Operador</td>
                                @endif

                                <td><a href='#' class="btn btn-dark">Resetear</a></td>
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
