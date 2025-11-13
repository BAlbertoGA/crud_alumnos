@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/escuelas/'.$escuela->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('escuelas.formEscuelas', ['modo'=>'Editar Escuela'])
    
    
</form>

</div>
@endsection