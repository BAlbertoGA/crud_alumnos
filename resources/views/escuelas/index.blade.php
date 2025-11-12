@extends('layouts.app')

@section('content')
    <h1>Listado de Escuelas</h1>

    <a href="{{ route('escuelas.create') }}">➕ Nueva Escuela</a>

    <table cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
        @foreach($escuelas as $escuela)
            <tr>
                <td>{{ $escuela->id }}</td>
                <td>{{ $escuela->nombre }}</td>
                <td>{{ $escuela->direccion }}</td>
                <td>
                    <a href="{{ route('escuelas.edit', $escuela->id) }}">✏️ Editar</a>
                    
                    <form action="{{ route('escuelas.destroy', $escuela->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
