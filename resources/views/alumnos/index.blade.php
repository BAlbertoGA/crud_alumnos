@extends('layouts.app')
@section('content')
<h1>Listado de Alumnos</h1>

    <a href="{{ route('alumnos.create') }}">➕ Nuevo Alumno</a>
<div class="container">
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Escuela</th>
                <th>Acciones</th>
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
                    <td>
                        <a href="{{ url('/alumnos/'.$alumno->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>
                        
                        <form action="{{ url('/alumnos/'.$alumno->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection


