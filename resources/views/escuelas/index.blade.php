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
                <th>
                    <div class="flex items-center">
                        <a class="hover:underline" href="{{ route('escuelas.index', ['sort' => 'id', 'direction' => request('sort') === 'id' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">ID</a>
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
                        <a class="hover:underline" href="{{ route('escuelas.index', ['sort' => 'nombre', 'direction' => request('sort') === 'nombre' && request('direction') === 'asc' ? 'desc' : 'asc']) }}">Nombre</a>
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
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach($escuelas as $escuela)
            <tr>
                <td>{{ $escuela->id }}</td>
                <td>{{ $escuela->nombre }}</td>
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
    {{-- {{ $escuelas->links('pagination::bootstrap-5') }} --}}
    {{ $escuelas->appends(['sort' => request('sort'), 'direction' => request('direction')])->links('pagination::bootstrap-5') }}
</div>
@endsection
