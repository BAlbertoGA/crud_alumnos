@extends('layouts.app')
@section('content')

<div class="container">
    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Escuela</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->primerapellido }}</td>
                    <td>{{ $alumno->segundoapellido }}</td>
                    <td>{{ $alumno->escuelas->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection


