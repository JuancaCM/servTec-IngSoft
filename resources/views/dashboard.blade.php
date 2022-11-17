@extends('base')

@section('content')
    <div class="container mt-4">
        <h1 class="display-6">Tecnología SC - Dashboard</h1>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href='registroProcedimientos' class="btn btn-primary">Nueva orden</a>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">OT #ID</th>
                    <th scope="col">RUT</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acción</th>
                    <th scope="col">Ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($procedimientos as $p)
                    <tr>
                        <td>
                            {{ $p->id }}
                        </td>
                        <td>
                            {{ $p->equipo->cliente->rut }}
                        </td>
                        <td>
                            {{ $p->equipo->marca }}
                        </td>
                        <td>
                            {{ $p->equipo->modelo }}
                        </td>
                        <td>
                            {{ $p->valor }}
                        </td>
                        <td>

                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $p->estado->estado }}
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($estados as $e)
                                    <li><a class="dropdown-item" href="#">{{ $e->estado }}</a></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href='dashboard/{{ $p->id }}' class="btn btn-outline-warning">Detalle</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-dark">Ticket</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
