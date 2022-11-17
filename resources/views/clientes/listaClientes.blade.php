@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-5 col-md-8  shadow">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre cliente</th>
                            <th scope="col">RUT</th>
                            <th scope="col">Contacto</th>
                            <th scope="col">Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $c)
                            <tr>
                                <td>{{ $c->nombre }}</td>
                                <td>{{ $c->rut }}</td>
                                <td>{{ $c->contacto }}</td>
                                <td>{{ $c->correo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href='{{ url()->previous() }}' class="btn btn-primary">Atrás</a>
                </div>
            </div>
        </div>
    @endsection
