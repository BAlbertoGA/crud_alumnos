@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/alumnos/'.$alumno->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('alumnos.formAlumnos', ['modo'=>'Editar'])
    
    
</form>

</div>
@endsection