@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-5 col-md-8 shadow">
            @if (null != session('success') && session('success'))
                <div class="mt-3 alert alert-success text-center">
                    Cliente eliminado correctamente
                </div>
            @elseif (null != session('success') && session('success'))
                <div class="mt-3 alert alert-danger text-center">
                    Ha ocurrido un error al eliminar al cliente
                </div>
            @endif
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
                                <td><form method="post" action="{{route('borrarCliente',$c->id)}}">
                                    @csrf
                                    <div class="text-center">
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <a href='/actualizarCliente/idCliente={{ $c->id }}' class="btn btn-warning"
                                            style="--bs-btn-font-size: .45rem;"><i class="bi bi-pencil-square"
                                                style="font-size: 2em;"></i></a>
                                        <button onclick="return confirm('¿Está seguro que desea eliminar el registro?')" class="btn btn-danger" style="--bs-btn-font-size: .45rem;"><i
                                                class="bi bi-x-circle" style="font-size: 2em;"></i></button>

                                        {{-- <a href='/actualizarCliente/idCliente={{ $c->id }}' class="btn btn-dark">Editar</a> --}}
                                    </div></form>
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
