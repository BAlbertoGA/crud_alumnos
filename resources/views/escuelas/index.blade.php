@extends('layouts.app')

@section('content')
    <h1>Listado de Escuelas</h1>

    <a href="{{ route('escuelas.create') }}">➕ Nueva Escuela</a>
    <br>
<div class="container">
    @include('layouts.message')
    <table class="table table-striped">
        <thead>
            <tr class="thead-inverse">
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach($escuelas as $escuela)
            <tr>
                <td>{{ $escuela->id }}</td>
                <td>{{ $escuela->nombre }}</td>
                <td>{{ $escuela->direccion }}</td>
                <td>
                        <a href="{{ url('/escuelas/'.$escuela->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>
                        
                        <form action="{{ url('/escuelas/'.$escuela->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger">
                        </form>
                    </td>
            </tr>
        @endforeach
    </table>
    {{ $escuelas->links('pagination::bootstrap-5') }}
</div>
@endsection
