{{-- @extends('layouts.app') --}}
@extends('adminlte::page')
@section('title', 'Lista Alumnos')

@section('content_header')
    <h1>Lista Alumnos</h1>
@stop
@section('content')

    <a href="{{ route('alumnos.create') }}">➕ Nuevo Alumno</a>
    <br>
<div class="container">
    @include('layouts.message')
    
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">
                    <div class="flex items-center">
                        <a class="hover:underline" href="{{ route('alumnos.index', ['sort' => 'id', 'direction' => request('sort') === 'id' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">ID</a>
                        @if (request('sort') === 'id')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                                @if (request('direction', 'asc') === 'asc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                @else
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                @endif
                            </svg>
                        @endif
                    </div>
                </th>
                <th>
                    <div class="flex items-center">
                        <a class="hover:underline" href="{{ route('alumnos.index', ['sort' => 'nombre', 'direction' => request('sort') === 'nombre' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">Nombre</a>
                        @if (request('sort') === 'nombre')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                                @if (request('direction', 'asc') === 'asc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                @else
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                @endif
                            </svg>
                        @endif
                    </div>
                </th>
                <th>
                    <div class="flex items-center">
                        <a class="hover:underline" href="{{ route('alumnos.index', ['sort' => 'primerapellido', 'direction' => request('sort') === 'primerapellido' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">Primer Apellido</a>
                        @if (request('sort') === 'primerapellido')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                                @if (request('direction', 'asc') === 'asc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                @else
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                @endif
                            </svg>
                        @endif
                    </div>
                </th>
                <th>
                    <div class="flex items-center">
                        <a class="hover:underline" href="{{ route('alumnos.index', ['sort' => 'segundoapellido', 'direction' => request('sort') === 'segundoapellido' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">Segundo Apellido</a>
                        @if (request('sort') === 'segundoapellido')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                                @if (request('direction', 'asc') === 'asc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                @else
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                @endif
                            </svg>
                        @endif
                    </div>
                </th>
                <th>
                    <div class="flex items-center">
                        <a class="hover:underline" href="{{ route('alumnos.index', ['sort' => 'escuela', 'direction' => request('sort') === 'escuela' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">Escuela</a>
                        @if (request('sort') === 'escuela')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="16" width="16">
                                @if (request('direction', 'asc') === 'asc')
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                @else
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                @endif
                            </svg>
                        @endif
                    </div>
                </th>
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
                    <td>{{ $alumno->escuela->nombre }}</td>
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
    {{-- {{ $alumnos->links('pagination::bootstrap-5') }} --}}
    {{ $alumnos->appends(['sort' => request('sort'), 'direction' => request('direction')])->links('pagination::bootstrap-5') }}


</div>
@endsection


