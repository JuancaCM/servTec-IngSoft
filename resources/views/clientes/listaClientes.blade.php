@extends('base')

@section('content')
    <div class="card mt-3 col-md-4 offset-md-4 border-left-primary shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre cliente</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">N° Procedimientos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Caceres</td>
                        <td>+569420</td>
                        <td>6</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
