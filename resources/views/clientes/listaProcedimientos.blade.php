@extends('base')

@section('content')
    <div class="card mt-3 col-md-6 offset-md-3 border-left-primary shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre cliente</th>
                        <th scope="col">Nombre operador</th>
                        <th scope="col">Modelo y marca</th>
                        <th scope="col">Fecha Ingreso</th>
                        <th scope="col">Comentarios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Caceres</td>
                        <td>Juan Caceres</td>
                        <td>Samsung Galaxy S22</td>
                        <td>06-09</td>
                        <td>El celular se recibió con la pantalla rayada y la carcasa rota por detras.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
