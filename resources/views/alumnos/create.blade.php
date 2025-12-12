@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Crear Alumno</h1>
    <form action="{{ url('/alumnos') }}" method="post">
        @csrf
        @include('alumnos.formAlumnos', ['modo'=>'Crear Alumno'])
    </form>
</div>
@endsection