@extends('adminlte::page')

@section('content')
<div class="container">

<form action="{{url('/alumnos/'.$alumno->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('alumnos.formAlumnos', ['modo'=>'Editar Alumno'])
    
    
</form>

</div>
@endsection