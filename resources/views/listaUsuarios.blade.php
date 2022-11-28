@extends('base')

@section('content')
    @if (null != session('success') && session('success'))
        <div class="alert alert-success text-center">
            Usuario actualizado correctamente
        </div>
    @elseif (null != session('success') && session('success'))
        <div class="alert alert-danger text-center">
            Ha ocurrido un error al actualizar el Usuario
        </div>
    @endif
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
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->nombre }}</td>
                                <td>{{ $u->correo }}</td>
                                {{-- <td>{{ $u->rol_id }}</td> --}}
                                @if ($u->rol_id == 1)
                                    <td>Administrador</td>
                                @else
                                    <td>Operador</td>
                                @endif
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editarCampos{{ $u->id }}">
                                        Editar
                                    </button>

                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="editarCampos{{ $u->id }}" tabindex="-1"
                                aria-labelledby="modalEditarCampos" aria-hidden="true" data-bs-backdrop="static">
                                <div class="modal-dialog">
                                    <form id="updateUsuario" method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="tituloModal">Editar usuario ID:
                                                    {{ $u->id }}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row mb-2">
                                                    <div class="col-4">
                                                        <span><strong>Nombre: </strong></span>
                                                    </div>
                                                    <div class="col-8"><input type="text" class="form-control"
                                                            id="nombre" name="nombre" value="{{ $u->nombre }}"></div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-4"><span><strong>Correo: </strong></span>
                                                    </div>
                                                    <div class="col-8"><input type="text" class="form-control"
                                                            id="correo" name="correo" value="{{ $u->correo }}">
                                                    </div>
                                                </div>
                                                <input type="hidden" value="{{ $u->id }}" name="id">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Descartar</button>
                                                    <button type="submit" id="guardar"
                                                        class="btn btn-primary">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
