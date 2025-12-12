@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Crear Escuela</h1>
    <form action="{{ url('/escuelas') }}" method="post">
        @csrf
        @include('escuelas.formEscuelas', ['modo'=>'Registrar Escuela'])
    </form>
</div>
@endsection